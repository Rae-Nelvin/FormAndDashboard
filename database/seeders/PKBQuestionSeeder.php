<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionSection;
use App\Models\QuestionSubSection;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PKBQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionSection::create([
            'groupQuestionID' => 2,
            'name' => 'Data Diri'
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 5,
            'name' => 'Data Diri'
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Nama',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 2,
            'name' => 'KOMPETENSI AKADEMIK',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 6,
            'name' => '1'
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Mampu mengembangkan materi pembelajaran secara kreatif.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Mampu mengembangkan materi pembelajaran secara kreatif.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan).',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Membuat Perencanaan Pembelajaran.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Membuat Perencanaan Pembelajaran.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Penilaian Pembelajaran.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Penilaian Pembelajaran.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 2,
            'name' => 'KOMPETENSI KEPRIBADIAN DAN SOSIAL',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 7,
            'name' => '2'
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat).',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi).',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Mampu beradaptasi dengan lingkungan kerja.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Mampu beradaptasi dengan lingkungan kerja.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menunjukkan sikap bersedia bekerjasama dengan kolega.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 7,
            'subsectionID' => 30,
            'question' => 'Menunjukkan sikap bersedia bekerjasama dengan kolega.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 2,
            'name' => 'KOMPETENSI MORAL DAN SPIRITUAL',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 8,
            'name' => '3'
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berusaha memperjuangkan kebenaran',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berusaha memperjuangkan kebenaran',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berusaha terus menerus mengejar keunggulan.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berusaha terus menerus mengejar keunggulan.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Bersedia untuk melayani sesama.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Bersedia untuk melayani sesama.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berusaha mewujudkan kasih kepada sesama.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berusaha mewujudkan kasih kepada sesama.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berkomitmen terhadap keadilan.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 8,
            'subsectionID' => 31,
            'question' => 'Berkomitmen terhadap keadilan.',
            'questionType' => 'checkbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
