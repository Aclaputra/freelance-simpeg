Planning Laravel 9 SIMPEG:

<!-- updated plan -->
Routes:
- /dashboard
    - /sasaran_kerja_pegawai
        - /create
        - /{id}/edit
    - /laporan
        - /bulanan
        - /tahunan
    - /komponen_penilaian_pekerjaan (KKP)
        - /aktivitas (CRUD Aktivitas)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /indikator_kinerja_utama (CRUD IKU)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /realisasi_anggaran (CRUD Realisasi)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /perilaku (CRUD Perilaku)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /indikator_kinerja_individu (CRUD IKI)
            - /create
            - /{id}/edit
            - /bobot
            - /rate
        - /intruksi_khusus_pimpinan (CRUD IKP)
            - /create
            - /{id}/edit
            - /bobot
            - /rate

<!-- notes -->
- buat info di /dashboard pegawai
- buat crud di /dashboard/sasaran_kerja_pegawai/skp
- buat crud penilaian kinerja skp di :
    - dashboard/komponen_penilaian_pekerjaan/aktiv
    - dashboard/komponen_penilaian_pekerjaan/iku
    - dashboard/komponen_penilaian_pekerjaan/realisasi_anggaran
    - dashboard/komponen_penilaian_pekerjaan/perilaku
    - dashboard/komponen_penilaian_pekerjaan/iki
    - dashboard/komponen_penilaian_pekerjaan/ikp

<!-- planning data 6 penilaian kinerja -->

<!-- glosarium -->
- iku = Indikator Kinerja Utama
- realisasi = Realisasi Anggaran
- iki = Indikator Kinerja Individu
- ikp = Indikator Kinerja Pimpinan
- laporan skp = skp + penilaian kinerja  

<!-- glosarium end -->
- aktivitas
    - nama, nip, aktivitas, penilaian
- iku
    - nama, nip, iku, penilaian
- realisasi anggaran
    - nama, nip, realisasi_anggaran, penilaian
- perilaku
    - nama, nip, perilaku, penilaian
- iki
    - nama, nip, iki, penilaian
- ikp
    - nama, nip, ikp, penilaian

