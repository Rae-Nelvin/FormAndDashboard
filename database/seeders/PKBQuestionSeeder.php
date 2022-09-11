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
            'name' => 'KOMPETENSI AKADEMIK',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 4,
            'groupQuestionID' => 2,
            'name' => '1'
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam mendidik siswa.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Mampu mengembangkan materi pembelajaran secara kreatif.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Mampu mengembangkan materi pembelajaran secara kreatif.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Mampu mengembangkan kurikulum yang terkait dengan bidang pengembangan yang diampu.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Mampu menyelenggarakan kegiatan pengembangan yang mendidik.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Memfasilitasi pengembangan potensi peserta didik untuk mengaktualisasikan berbagai potensi yang dimiliki.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan peserta didik.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Memanfaatkan TIK (Teknologi Informasi dan Komunikasi) untuk kepentingan penyelenggaraan kegiatan pengembangan yang mendidik.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Melakukan penilaian dan evaluasi proses dan hasil belajar, memanfaatkan hasil penilaian dan evaluasi untuk kepentingan pembelajaran.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Melakukan tindakan reflektif untuk peningkatan kualitas pembelajaran melalui PKB(Peningkatan Kompetensi Berkelanjutan).',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Membuat Perencanaan Pembelajaran.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Membuat Perencanaan Pembelajaran.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Pelaksanaan Kegiatan Pembelajaran yang Aktif, Efektif, dan Menyenangkan dengan dinamika PPI.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Penilaian Pembelajaran.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 4,
            'subsectionID' => 27,
            'question' => 'Penilaian Pembelajaran.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 2,
            'name' => 'KOMPETENSI KEPRIBADIAN DAN SOSIAL',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 5,
            'groupQuestionID' => 2,
            'name' => '2'
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Bertindak sesuai dengan norma agama, hukum, sosial, dan kebudayaan Nasional Indonesia.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menampilkan diri sebagai pribadi yang matang ( jujur, berkarakter baik, menjadi teladan bagi peserta didik dan masyarakat).',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menampilkan diri sebagai pribadi yang mantap, stabil, dewasa, arif, dan berwibawa.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menunjukkan etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi Pendidik, dan rasa percaya diri (Etos kerja tinggi).',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menjunjung tinggi kode etik profesi Pendidik dan PUK yayasan.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Bertindak objektif serta tidak diskriminatif karena pertimbangan jenis kelamin, agama, ras, kondisi fisik, latar belakang keluarga, dan status sosial ekonomi (memartabatkan).',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Berkomunikasi secara efektif, empatik, dan santun dengan sesama pendidik, tenaga kependidikan, orang tua, dan masyarakat.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Mampu beradaptasi dengan lingkungan kerja.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Mampu beradaptasi dengan lingkungan kerja.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menunjukkan sikap bersedia bekerjasama dengan kolega.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 5,
            'subsectionID' => 28,
            'question' => 'Menunjukkan sikap bersedia bekerjasama dengan kolega.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionSection::create([
            'groupQuestionID' => 2,
            'name' => 'KOMPETENSI MORAL DAN SPIRITUAL',
        ]);

        QuestionSubSection::create([
            'sectionQuestionID' => 6,
            'groupQuestionID' => 2,
            'name' => '3'
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berusaha memperjuangkan kebenaran',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berusaha memperjuangkan kebenaran',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berusaha terus menerus mengejar keunggulan.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berusaha terus menerus mengejar keunggulan.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Bersedia untuk melayani sesama.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Bersedia untuk melayani sesama.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berusaha mewujudkan kasih kepada sesama.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berusaha mewujudkan kasih kepada sesama.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berkomitmen terhadap keadilan.',
            'questionType' => 'text',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Question::create([
            'groupID' => 2,
            'sectionID' => 6,
            'subsectionID' => 29,
            'question' => 'Berkomitmen terhadap keadilan.',
            'questionType' => 'checkbox',
            'minimumScore' => 1,
            'maximumScore' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
