<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionSection;
use App\Models\QuestionSubSection;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EDPQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionSection::create([
            'groupQuestionID' => 1,
            'name' => 'Data Diri'
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 1,
            'name' => 'Data Diri'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 1,
            'subsectionID' => 1,
            'question' => 'Nama',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 1,
            'name' => 'KOMPETENSI  AKADEMIK (Pedagogi dan profesional)',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Pendidik dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Pendidik  memastikan  bahwa  semua  peserta  didik  mendapatkan  kesempatan  yang  sama  untuk  berpartisipasi aktif dalam kegiatan pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Pendidik dapat mengatur  kelas untuk  memberikan  kesempatan  belajar  yang sama pada semua  peserta  didik dengan kelainan fisik dan kemampuan belajar yang berbeda.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Pendidik mencoba mengetahui  penyebab  penyimpangan  perilaku peserta didik untuk mencegah  agar perilaku tersebut tidak merugikan peserta didik lainnya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Pendidik membantu mengembangkan  potensi dan mengatasi kekurangan/kelemahan peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Pendidik memperhatikan peserta didik dengan kelemahan fisik tertentu agar dapat mengikuti aktivitas pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Memberikan motivasi/ dorongan/ tantangan kepada siswa sehingga menjadi bersemangat belajar',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Memberi kesempatan kepada siswa untuk bereksplorasi, berefleksi, dan bernegosiasi',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Membimbing siswa secara perorangan berdasarkan pemahaman atas situasi atau pribadi khas siswa tersebut',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 2,
            'question' => 'Guru melibatkan aktivitas mental, emosional, sosial, dan kultur siswa dalam mengajar.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Mampu mengembangkan materi pembelajaran secara kreatif'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 3,
            'question' => 'Pendidik menguasai teori belajar dan prinsip-prinsip pembelajaran yang mendidik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 3,
            'question' => 'Pendidik menguasai materi, struktur, konsep, dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 3,
            'question' => 'Pendidik memahami capaian pembelajaran dan menurunkannya dalam Tujuan pembelajaran dan alur tujuan pembelajaran pada mata pelajaran yang diampu',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 3,
            'question' => 'Pendidik mampu memperkaya mata pelajaran yang diampu dengan permasalahan kontekstual dan perkembangan mutakhir.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 3,
            'question' => 'Pendidik menggunakan berbagai teknik untuk memotiviasi kemauan belajar peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 3,
            'question' => 'Pendidik merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 3,
            'question' => 'Pendidik memperhatikan respon peserta didik yang belum/kurang memahami materi pembelajaran yang diajarkan dan menggunakannya untuk memperbaiki rancangan pembelajaran berikutnya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 4,
            'question' => 'Pendidik dapat menyusun silabus/Alur Tujuan Pembelajaran yang sesuai dengan kurikulum (pengalaman belajar siswa dan pencapaian tujuan pembelajaran tergambar dengan jelas)',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 4,
            'question' => 'Pendidik merancang rencana pembelajaran/ modul ajar yang sesuai dengan silabus/ATP dengan pemilihan dan pengorganisasian  materi yang sesuai dengan dengan kontek siswa.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 4,
            'question' => 'Pendidik dapat merancang RPP/Modul ajar dengan instrumen penilaian secara kreatif dan variatif(tidak monoton)  yang sesuai dengan tujuan pembelajaran dan capaian pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 4,
            'question' => 'Pendidik memilih materi pembelajaran yang: sesuai dengan tujuan pembelajaran, tepat, dan mutakhir, sesuai dengan usia dan tingkat kemampuan belajar peserta didik, dapat dilaksanakan di kelas, sesuai dengan konteks kehidupan sehari-hari peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pedidik mengembangkan kompetensi siswa (sebagai perpaduan pengetahuan, kecakapan, sikap, dan values)',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik melaksanakan aktivitas pembelajaran yang menyenangkan dengan menggunakan berbagai media   untuk membantu siswa belajar mengakses informasi dan mendukung interaksi siswa dengan sumber belajar.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik menyampaikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik menyikapi kesalahan yang dilakukan peserta didik dengan ucapan, mimik muka, dan gerakan tubuh mencerminkan sikap menghormati pribadi siswa dan memandang kesalahan sebagai tahapan proses pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari‐hari.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik melakukan aktivitas pembelajaran secara bervariasi/berbagai metode yang mendorong keterlibatan siswa secara aktif.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik mengelola kelas dengan efektif tanpa mendominasi atau sibuk dengan kegiatannya sendiri agar semua waktu peserta dapat termanfaatkan secara produktif.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik mampu mendengarkan dan memahami harapan/gagasaan siswa, kemudian merespon dengan terbuka.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik memberikan banyak kesempatan kepada peserta didik untuk bertanya, mempraktikkan, dan berinteraksi dengan peserta didik lain.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik mengatur pelaksanaan aktivitas pembelajaran secara sistematis untuk membantu proses belajar peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 5,
            'question' => 'Pendidik menggunakan alat bantu mengajar, dan/atau audio‐visual (termasuk TIK) untuk meningkatkan motivasi belajar peserta didik dalam mencapai tujuan pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 6,
            'question' => 'Pendidik menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing‐masing.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 6,
            'question' => 'Pendidik merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing‐masing.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 6,
            'question' => 'Pendidik merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berpikir kritis peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 6,
            'question' => 'Pendidik secara aktif membantu peserta didik dalam proses pembelajaran dengan memberikan perhatian kepada setiap individu.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 6,
            'question' => 'Pendidik dapat mengidentifikasi dengan benar tentang bakat, minat, potensi, dan kesulitan belajar masing‐masing peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 6,
            'question' => 'Pendidik memberikan kesempatan belajar kepada peserta didik sesuai dengan cara belajarnya masing‐masing.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 6,
            'question' => 'Pendidik memusatkan perhatian pada interaksi dengan peserta didik dan mendorongnya untuk memahami dan menggunakan informasi yang disampaikan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 7,
            'question' => 'Pendidik menggunakan pertanyaan untuk mengetahui pemahaman dan mendorong partisipasi peserta didik, termasuk memberikan pertanyaan terbuka yang menuntut peserta didik untuk menjawab dengan ide dan pengetahuan mereka.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 7,
            'question' => 'Pendidik memberikan perhatian dan mendengarkan semua pertanyaan dan tanggapan peserta didik, tanpa menginterupsi, kecuali jika diperlukan untuk membantu atau mengklarifikasi pertanyaan/tanggapan tersebut.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 7,
            'question' => 'Pendidik menanggapi pertanyaan peserta didik secara tepat, benar, dan mutakhir, sesuai tujuan pembelajaran dan isi kurikulum, tanpa mempermalukannya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 7,
            'question' => 'Pendidik menyajikan kegiatan pembelajaran yang dapat menumbuhkan kerja sama yang baik antar peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 7,
            'question' => 'Pendidik mendengarkan dan memberikan perhatian terhadap semua jawaban peserta didik baik yang benar maupun yang dianggap salah untuk mengukur tingkat pemahaman peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 7,
            'question' => 'Pendidik memberikan perhatian terhadap pertanyaan peserta didik dan meresponnya secara lengkap dan relevan untuk menghilangkan kebingungan pada peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 8,
            'question' => 'Pendidik memanfaatkan TIK untuk memperdalam penguasaan materi.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 8,
            'question' => 'Pendidik memanfaatkan TIK untuk memperoleh informasi dari berbagai sumber.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 8,
            'question' => 'Pendidik memanfaatkan TIK untuk mempercepat penyampaian pesan: informasi, tugas, materi pembelajaran sehingga pembelajaran aktual dan efektif.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 8,
            'question' => 'Pendidik memanfaatkan TIK sebagai media belajar yang efektif dan menarik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 9,
            'question' => 'Pendidik menyusun alat penilaian yang sesuai dengan tujuan pembelajaran untuk mencapai kompetensi tertentu seperti yang tertulis dalam RPP/Modul ajar.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 9,
            'question' => 'Pendidik melaksanakan asesmen diagnostif, formatif dan sumatif  dengan berbagai teknik (penilaian otentik)',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 9,
            'question' => 'Pendidik membantu siswa yang belum mencapai tujuan pembelajaran dan memberikan tantangan bagi siswa yang sudah mencapai tujuan pembelajaran melalui pembelajaran berdeferensiasi atau program remedial dan pengayaan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 9,
            'question' => 'Pendidik memanfaatkan masukan dari peserta didik dan merefleksikannya untuk meningkatkan pembelajaran selanjutnya, dan dapat membuktikannya melalui catatan, jurnal pembelajaran, rancangan pembelajaran, materi tambahan, dan sebagainya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 9,
            'question' => 'Pendidik memanfatkan hasil penilaian sebagai bahan penyusunan rancangan pembelajaran yang akan dilakukan selanjutnya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan)'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 10,
            'question' => 'Pendidik melakukan tindakan reflektif setiap selesai mengajar.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 10,
            'question' => 'Pendidik membuat jurnal reflektif pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 10,
            'question' => 'Pendidik menganalisis isi jurnal reflektif  untuk memperbaiki dan/atau meningkatkan kualitas pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 10,
            'question' => 'Pendidik berpartisipasi aktif dalam kegiatan lesson study.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 10,
            'question' => 'Pendidik berpartisipasi aktif dalam kegiatan PTK .',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Membuat Perencanaan Pembelajaran'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 11,
            'question' => 'Pendidik memformulasikan tujuan  pembelajaran dalam RPP/ Modul Ajar sesuai dengan kurikulum/silabus dan memperhatikan karakteristik peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 11,
            'question' => 'Pendidik menyusun  bahan ajar secara runut, logis, kontekstual dan mutakhir.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 11,
            'question' => 'Pendidik merencanakan kegiatan pembelajaran yang efektif dan menarik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 11,
            'question' => 'Pendidik memilih sumber belajar/ media pembelajaran sesuai dengan materi dan strategi pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik memulai pembelajaran dengan efektif dan menarik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik menguasai materi pelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik menerapkan pendekatan/strategi pembelajaran yang efektif.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik memanfaatan sumber belajar/ media dalam pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik mendorong  keterlibatan siswa dalam pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik memfasilitasi siswa untuk berprestasi tinggi dan memahami masalah yang lebih kompleks.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik mampu mengenali dan memecahkan masalah pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik menggunakan bahasa yang benar dan tepat dalam pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik mampu melakukan improvisasi.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik memonitor pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 12,
            'question' => 'Pendidik mengakhiri pembelajaran dengan efektif, indikatornya: siswa sungguh menguasai materi pelajaran, ada simpulan/rangkuman, refleksi, rencana yang akan datang.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 2,
            'name' => 'Penilaian Pembelajaran'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 13,
            'question' => 'Pendidik merancang alat penilaian  untuk mengukur kemajuan dan keberhasilan belajar peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 13,
            'question' => 'Pendidik menggunakan berbagai strategi dan metode penilaian  untuk memantau kemajuan dan hasil belajar peserta didik dalam mencapai tujuan pembelajaran  sebagaimana yang tertulis dalam RPP/modul ajar.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 2,
            'subsectionID' => 13,
            'question' => 'Pendidik memanfatkan berbagai  hasil penilaian dan analisanya untuk memberikan umpan balik bagi peserta didik tentang kemajuan belajarnya dan  bahan penyusunan rancangan pembelajaran selanjutnya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 1,
            'name' => 'KOMPETENSI KEPRIBADIAN DAN SOSIAL',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 14,
            'question' => 'Pendidik menghargai dan mempromosikan prinsip‐prinsip pendidikan Jesuit dan Pancasila.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 14,
            'question' => 'Pendidik mampumengambil keputusan secara bijak dengan mempertimbangkan norma yang berlaku.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 14,
            'question' => 'Pendidik bersikap  saling menghormati dan menghargai orang lain dengan bertingkah laku dan bertutur kata sesuai norma.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 14,
            'question' => 'Pendidik memiliki rasa persatuan dan kesatuan sebagai bangsa Indonesia dengan memberi tekanan pada nilai adil.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 14,
            'question' => 'Pendidik mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia dengan memberi tekanan pada nilai inklusif dan plural.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat)'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 15,
            'question' => 'Pendidik bersikap jujur, satunya antara kata dengan perbuatan (konsisten) dengan mengedepankan keteladanan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 15,
            'question' => 'Pendidik menunjukkan pandangan yang positif tentang dirinya dan orang lain.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 15,
            'question' => 'Pendidik bertindak sesuai dengan nilai, keyakinan, dan prinsip yang dipegangnya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 15,
            'question' => 'Pendidik selalu konsisten untuk bertindak adil, bersikap tegas, dan berjiwa besar serta bijak dalam mengambil keputusan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 15,
            'question' => 'Pendidik bertindak berdasarkan data dengan menjunjung tinggi akuntabilitas dan kredibilitas.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 15,
            'question' => 'Pendidik secara objektif menilai kinerja sendiri dan penuh syukur.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 15,
            'question' => 'Pendidik mengembangkan diri secara mandiri dan berkelanjutan serta melaksanakan tugas sebagai panggilan hidup.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 16,
            'question' => 'Pendidik bertingkah laku sopan dalam berbicara, berpenampilan, dan berbuat arif terhadap semua peserta didik, orang tua, dan teman sejawat.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 16,
            'question' => 'Pendidik mau membagi pengalamannya dengan teman sejawat, termasuk mengundang mereka untuk mengobservasi cara mengajarnya dan memberikan masukan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 16,
            'question' => 'Pendidik mampu mengelola pembelajaran yang membuktikan bahwa Pendidik dihormati oleh peserta didik, sehingga semua peserta didik selalu memperhatikan Pendidik dan berpartisipasi aktif dalam proses pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 16,
            'question' => 'Pendidik bersikap dewasa dalam menerima masukan dari peserta didik dan memberikan kesempatan kepada peserta didik untuk berpartisipasi dalam proses pembelajaran.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 16,
            'question' => 'Pendidik memahami, menerima apa adanya dan memperlakukan siswa dan kolega dengan hormat tanpa membedakan latar belakang berbeda.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi)'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik mengawali dan mengakhiri pembelajaran dengan tepat waktu.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik menunjukkan sikap bertanggung-jawab dalam melaksanakan pekerjaan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik bersedia menjalankan tugas yang ditugaskan pimpinan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik proaktif terlibat/peduli dalam kegiatan sekolah.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik menyelesaikan semua tugas administratif dan non‐pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik memanfaatkan waktu luang selain mengajar untuk kegiatan yang produktif terkait dengan tugasnya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik memberikan kontribusi terhadap pengembangan sekolah dan mempunyai prestasi yang berdampak positif terhadap nama baik sekolah.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 17,
            'question' => 'Pendidik merasa bangga dengan profesinya sebagai Pendidik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan '
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik  membimbing peserta didik dengan penuh kasih.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik memiliki kejujuran profesi.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik berkomunikasi untuk memperoleh informasi.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik menciptakan suasana yang baik dan hubungan yang sinergis.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik mengembangkan mutu profesi',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik menciptakan hubungan yang harmonis dengan Kepala Sekolah, sesama Pendidik, dan Tenaga Kependidikan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik mendukung kebijakan Sekolah dan yayasan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 18,
            'question' => 'Pendidik memahami dan mematuhi kode etik pendidik dan PUK Yayasan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 19,
            'question' => 'Pendidik memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing‐masing.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 19,
            'question' => 'Pendidik menjaga hubungan baik dan peduli dengan teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal terkait dengan pekerjaannya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 19,
            'question' => 'Pendidik sering berinteraksi dengan peserta didik dan tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan Pendidik).',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 19,
            'question' => 'Pendidik respek terhadap Kepala Sekolah, sesama Pendidik,Tenaga Kependidikan, dan peserta didik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 20,
            'question' => 'Pendidik menyampaikan informasi tentang kemajuan, kesulitan, dan potensi peserta didik kepada orang tua / wali murid secara periodik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 20,
            'question' => 'Pendidik ikut berperan aktif dalam kegiatan di luar pembelajaran yang diselenggarakan oleh sekolah dan masyarakat dan dapat memberikan bukti keikutsertaannya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 20,
            'question' => 'Pendidik memperhatikan sekolah sebagai bagian dari masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatan sosial di masyarakat.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 20,
            'question' => 'Pendidik dalam berkomunikasi dengan mempertimbangkan situasi orang lain.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 20,
            'question' => 'Pendidik mendengarkan pandangan/ pendapat orang lain secara serius dan antusias.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 20,
            'question' => 'Pendidik memberikan tanggapan secara proporsional atas pendapat/ pandangan prang lain.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 20,
            'question' => 'Pendidik menunjukkan sikap menghargai melalui pilihan kata yang digunakan dalam berkomunikasi.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Mampu beradaptasi dengan lingkungan kerja'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 21,
            'question' => 'Pendidik menghargai budaya masyarakat di lingkungan kerjanya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 21,
            'question' => 'Menghargai perbedaan pendapat/ pandangan kolega dan siswa.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 21,
            'question' => 'Pendidik mampu beradaptasi dan menyesuaikan diri dengan nilai- nilai yang dijunjung tinggi oleh komunitas sekolah.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 21,
            'question' => 'Pendidik menerapkan prinsip-prinsip persaudaraan dan semangat kebersamaan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 3,
            'name' => 'Menunjukkan sikap bersedia bekerjasama dengan kolega'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 22,
            'question' => 'Pendidik mampu memberikan prioritas pada pencapaian tujuan bersama daripada tujuan pribadi/ kelompok.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 22,
            'question' => 'Pendidik mampu membangun jejaring dengan sesama Pendidik baik melalui media tulis maupun media elektronik.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 22,
            'question' => 'Pendidik bersedia menjalankan keputusan yang telah disepakati bersama.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 3,
            'subsectionID' => 22,
            'question' => 'Pendidik bersedia berbagi pengetahuan/ informasi dengan kolega.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 1,
            'name' => 'KOMPETENSI  MORAL DAN SPIRITUAL',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 4,
            'name' => 'Berusaha memperjuangkan kebenaran'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 23,
            'question' => 'Pendidik memandang secara positif dinamika yang terjadi di dalam dirinya dan komunitas sekolah.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 23,
            'question' => 'Pendidik menunjukkan sikap kritis terhadap dinamika yang terjadi di dalam dirinya dan komunitas sekolah.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 4,
            'name' => 'Berusaha terus menerus mengejar keunggulan'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 24,
            'question' => 'Pendidik menerima dan memanfaatkan kritik/ masukan dari kolega.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 24,
            'question' => 'Pendidik menunjukkan kerelaan untuk mengakui kesalahan/ kekurangan dengan rendah hati.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 24,
            'question' => 'Pendidik menunjukkan sikap terbuka terhadap perubahan dalam komunitas sekolah.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 24,
            'question' => 'Pendidik aktif mendukung terciptanya komunitas yang mampu mengembangkan anggotanya.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 4,
            'name' => 'Bersedia untuk melayani sesama'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 25,
            'question' => 'Pendidik berusaha memahami situasi dan kebutuhan siswa dan kolega.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 25,
            'question' => 'Pendidik bersedia memberi perhatian kepada siswa dan kolega yang sedang menghadapi kesulitan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 25,
            'question' => 'Pendidik bersedia memberi bantuan kepada siswa dan kolega yang membutuhkan.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 4,
            'name' => 'Berusaha mewujudkan kasih kepada sesama'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 26,
            'question' => 'Berusaha membina hubungan positif dengan siswa dan kolega.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 26,
            'question' => 'Bersedia memaafkan dan meminta maaf kepada siswa dan kolega.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 4,
            'name' => 'Berkomitmen terhadap keadilan'
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Menunjukkan sikap adil ketika menghadapi persoalan dengan siswa dan kolega.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 1,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Bersedia menjelaskan harapan dan berbesar hati apabila orang lain belum bisa memenuhi.',
            'questionType' => 'number',
            'minimumScore' => 1,
            'maximumScore' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
