document.addEventListener('alpine:init', () => {
    Alpine.data('timerNavbar', () => ({
        time: 0,
        examSessionId: null,
        interval: null,
        active: false,

        init() {
            this.listenExamTimer();
            this.handleUnload();
        },

        listenExamTimer() {
            // Dengar event dari Livewire
            window.addEventListener('exam-timer-started', e => {
                this.time = e.detail.timeRemaining;
                this.examSessionId = e.detail.examSessionId;
                this.active = true;
                this.startCountdown();
            });
        },

        startCountdown() {
            if (this.interval) clearInterval(this.interval);
            this.interval = setInterval(() => {
                if (this.time > 0) {
                    this.time--;

                    // Update ke server tiap 10 detik
                    if (this.time % 10 === 0) {
                        this.sendTimeToServer();
                    }
                } else {
                    clearInterval(this.interval);
                    Livewire.dispatch('examTimeOver');
                }
            }, 1000);
        },

        formattedTime() {
            const m = Math.floor(this.time / 60);
            const s = this.time % 60;
            return `${m}:${s.toString().padStart(2, '0')}`;
        },

        sendTimeToServer() {
            if (!this.examSessionId) return;
            Livewire.dispatch('updateTimeRemaining', [this.time]);
        },

        handleUnload() {
            // 🧭 Kirim waktu ke server sebelum keluar
            const sendTimeOnExit = () => {
                this.sendTimeToServer();

                // Gunakan sendBeacon agar request tetap dikirim walau tab ditutup
                if (this.examSessionId && navigator.sendBeacon) {
                    const data = new FormData();
                    data.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
                    data.append('exam_session_id', this.examSessionId);
                    data.append('remaining_time', this.time);
                    navigator.sendBeacon('/participant/exams/start/update-time', data);
                }
            };

            // ⚠️ Tampilkan peringatan sebelum reload/close
            window.addEventListener('beforeunload', (event) => {
                if (this.active) {
                    sendTimeOnExit();

                    // Tampilkan dialog konfirmasi
                    event.preventDefault();
                    event.returnValue = '';
                    return '';
                }
            });

            // 💤 Jika user minimize atau pindah tab, tetap kirim waktu
            document.addEventListener('visibilitychange', () => {
                if (document.hidden && this.active) {
                    sendTimeOnExit();
                }
            });
        },
    }));
});
