<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yuris Alkhalifi</title>
  <meta content="Portfolio of Yuris Alkhalifi" name="description">
  <meta content="Yuris Alkhalifi, CV, Portfolio" name="keywords">
  <meta content="Yuris Alkhalifi" name="author">

  <!-- Favicons -->
  <link href="<?= base_url('assets/'); ?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/'); ?>img/YAK Logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/'); ?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome/css/all.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?= base_url('assets/'); ?>img/profile-img2.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Yuris Alkhalifi,</a></h1>
        <p class="gelar">M.Kom., CPDSA</p>
        <div class="social-links mt-3 text-center">
          <a href="https://www.twitter.com/alkhalifi60/" target="_blank" class=" twitter"><i class="bx bxl-twitter" title="Twitter"></i></a>
          <a href="https://www.facebook.com/yurisalkhalifi1/" target="_blank" class="facebook"><i class="bx bxl-facebook" title="Facebook"></i></a>
          <a href="https://www.instagram.com/yuris60/" target="_blank" class="instagram"><i class="bx bxl-instagram" title="Instagram"></i></a>
          <a href="https://www.youtube.com/c/YurisAlkhalifiYAK" target="_blank" class="instagram"><i class="bx bxl-youtube" title="Youtube"></i></a>
          <a href="https://scholar.google.co.id/citations?user=JejMIVwAAAAJ&hl=id" target="_blank" class="google-plus" title="Google Scholar"><i class="bx bxs-graduation"></i></a>
          <!-- <a href="https://id.linkedin.com/in/yuris60" target="_blank" class="linkedin"><i class="bx bxl-linkedin" title="LinkedIn"></i></a> -->
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#skill" class="nav-link scrollto"><i class="bx bx-line-chart"></i> <span>Skill</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <!-- <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li> -->
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-briefcase-alt-2"></i> <span>My Projects</span></a></li>
          <li><a href="#certificate" class="nav-link scrollto"><i class="bx bx-file"></i> <span>Certificate</span></a></li>
          <li><a href="#hki" class="nav-link scrollto"><i class="bx bx-copyright"></i> <span>Intellectual Property Rights</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Yuris Alkhalifi</h1>
      <p>I'm <span class="typed" data-typed-items="Lecturer, Programmer, Graphic Designer, Content Creator"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Yuris Alkhalifi is the eldest of 2 children in the family. Born from a simple family who really appreciate the meaning of struggle. He aspires to be a useful person for many people so that he can bring a good name to his family.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?= base_url('assets/'); ?>img/profile-img2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Yuris Alkhalifi</h3>
            <p class="fst-italic">
              Lecturer, Programmer, Graphic Designer &amp; Content Creator.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= tgl_indo($tgl_lahir); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span>Indonesia<img src="<?= base_url('assets/img/indonesia.png'); ?>" height="20px" alt=""></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>Single</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Religion:</strong> <span>Islam</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Jakarta Timur, DKI Jakarta</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= hitung_umur($tgl_lahir); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master Computer (M.Kom)</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Non-Academic Degree:</strong> <span>CPDSA</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>yurisalkhalifi1@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skill" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Alhamdulillah, I was given a great desire to know about science, especially about programming. Of all the programming that I have learned, I am very interested and want to learn more about web programming. Therefore, many of the works that I have made, most of them are web programming. Besides that, I also like graphic design, so apart from being a lecturer, I was also placed in a division at the university on graphic design, namely the Publication & Promotion Division.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Illustrator <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>The story of the journey of Yuris Alkhalifi, a child from a simple family, This story begins with him pursuing a search for identity until he can succeed in achieving his dream of becoming a person who can be useful to many people and who can devote himself to the nation and country of Indonesia.<img src="<?= base_url('assets/img/indonesia.png'); ?>" height="20px" alt="">.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Yuris Alkhalifi</h4>
              <p><em>I'm a person who always wants to try to be active anywhere so that I can improve myself, until I got a full scholarship from Associate's Degree to Master at BSI Group, namely the University of Bina Sarana Informatika and the University of Nusa Mandiri.</em></p>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Software Engineering</h4>
              <h5>2012 - 2015</h5>
              <p><em><i class="fa-solid fa-school"></i> Vocational High School SMKN 1 Karawang</em></p>
              <!-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p> -->
            </div>
            <div class="resume-item">
              <h4>Associate’s Degree of Information System (D3)</h4>
              <h5>2015 - 2018</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> University of Bina Sarana Informatika Karawang</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
            <div class="resume-item">
              <h4>Bachelor of Information System (S1)</h4>
              <h5>2018 - 2019</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> University of Nusa Mandiri Jakarta</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
            <div class="resume-item">
              <h4>Master of Computer Science (S2)</h4>
              <h5>2019 - 2021</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> University of Nusa Mandiri Jakarta</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>

            <h3 class="resume-title">Organizational Experience</h3>
            <div class="resume-item">
              <h4>Head of Repal Community Graphic Design Division</h4>
              <h5>2013 - 2014</h5>
              <p><em><i class="fa-solid fa-school"></i> Vocational High School SMKN 1 Karawang</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
            <div class="resume-item">
              <h4>Head of Founding & Development Division</h4>
              <h5>2015 - 2020</h5>
              <p><em><img src="<?= base_url('assets/svg/scout.svg'); ?>" height="20px" alt=""> Regency Rover Scout Council of Karawang</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
            <div class="resume-item">
              <h4>Chairman</h4>
              <h5>2016 - 2021</h5>
              <p><em><img src="<?= base_url('assets/svg/scout.svg'); ?>" height="20px" alt=""> District Rover Scout Council of Karawang Barat</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
            <div class="resume-item">
              <h4>President of College Student</h4>
              <h5>2016 - 2017</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> Executive Council of Student of University of Bina Sarana Informatika Karawang</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
            <div class="resume-item">
              <h4>Chairman</h4>
              <h5>2017 - 2018</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> Informatics Management Student Association of University of Bina Sarana Informatika Karawang</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
            <div class="resume-item">
              <h4>Scout Instructor</h4>
              <h5>2021 - Present</h5>
              <p><em><img src="<?= base_url('assets/svg/scout.svg'); ?>" height="20px" alt=""> District Rover Scout Council of Karawang Barat</em></p>
              <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Internship Student of Remuneration and Salary</h4>
              <h5>2013</h5>
              <p><em><i class="fa-regular fa-building"></i> Perum Peruri Karawang </em></p>
              <ul>
                <li>Taking care of employee absences, including work off, illness and etc.</li>
                <li>Manage the salary of all employees in the company.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Internship Student of Information and Communication Technologies</h4>
              <h5>2014</h5>
              <p><em><i class="fa-regular fa-building"></i> Education Departement, Youth and Sports of Karawang</em></p>
              <ul>
                <li>Troubleshoot computer repair such as operating systems, printers, etc.</li>
                <li>Correcting the data of the Karawang teacher who had data errors on database.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Internship College Student of Information and Communication Technologies</h4>
              <h5>2017</h5>
              <p><em><i class="fa-regular fa-building"></i> District Court of Karawang</em></p>
              <ul>
                <li>Managed computer network that operates throughout the district court building.</li>
                <li>Troubleshoot computer repair such as operating systems, printers, etc.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Lecture Assistent</h4>
              <h5>2017-2019</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> University of Bina Sarana Informatika Karawang</em></p>
              <ul>
                <li>Assisting lecturers in teaching to students who experience problems in class.</li>
                <li>Subtitute the lecturer if the lecturer is unable to attend with the approval of the lecturer.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Lecture & College Staff</h4>
              <h5>2019 - Present</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> University of Bina Sarana Informatika Dewi Sartika A</em></p>
              <ul>
                <li>Provide teaching to students in accordance with the curriculum in the form of materials, RPS, RTM, etc.</li>
                <li>Assist campus institutions as staff in the Publication and Promotion Division.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>IT & Full Stack Developer</h4>
              <h5>2020 - Present</h5>
              <p><em><i class="fa-solid fa-graduation-cap"></i> "Nastya Beauty Care" Beauty Clinic</em></p>
              <ul>
                <li>Build an information system to facilitate sales and reporting data.</li>
                <li>Installing operational computer and networking.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>My Projects</h2>
          <p>Of the many web programming-based application projects that I have built, several of them have been successfully implemented and used. Below are the application project that has been implemented.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><img src="<?= base_url('assets/img/karya/kpr_logo.png'); ?>" width="40px" alt=""></div>
            <h4 class="title">SISFO KPR</h4>
            <p class="description">SISFO KPR is an abbreviation of the National General Election Commission Information System. SISFO KPR is a website-based application dedicated to the election of BSI Karawang Student President & Vice President which was created in 2017. Broadly speaking, the use of this application is that voters must confirm attendance at the admin desk, after that new voters can choose Student President & Vice President candidates for the next 1 year. Announcement of the results of the candidate who won the vote is announced through SISFO KPR.</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?= base_url('assets/img/karya/sema_logo.png'); ?>" width="40px" alt=""></div>
            <h4 class="title">SISEMA</h4>
            <p class="description">SISEMA is an abbreviation of Sistem Informasi Senat Mahasiswa (SEMA) BSI Karawang (Student Senate Information System BSI Karawang). SISEMA is a website-based application that was built as a means to store data on the SEMA organization was created in 2017. The most important feature is that the application eases the work of the secretary and treasurer in carrying out their duties. At the end of the term of office, the secretary & treasurer can submit reports using the SISEMA application.</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><img src="<?= base_url('assets/img/karya/siperpus_logo.png'); ?>" width="32px" alt=""></div>
            <h4 class="title">SIPERPUS</h4>
            <p class="description">SIPERPUS is an abbreviation of Sistem Informasi Perpustakaan (Library Information System). SIPERPUS is a website-based application built using the codeigniter framework, bootstrap library, and other libraries that was created in 2018. This application helps librarians to manage data such as book data, member data to book borrowing data and book returns. SIPERPUS was used for the first time by SMK Taruna Karya 76 Nurul Falah Karawang. Until now the SIPERPUS application is still being developed.</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><img src="<?= base_url('assets/img/karya/nysfo_logo.png'); ?>" width="30px" alt=""></div>
            <h4 class="title">NYSFO</h4>
            <p class="description">NYSFO is an abbreviation of Nastyaderm System Information, which was built in 2021 using the codeigniter framework, bootstrap library and other libraries. NYSFO is an application that I built for the beauty clinic Nastyaderm Karawang. NYSFO is divided into 2 parts, namely Front-End and Back-End. In the Back-End section specifically for customer service to manage product data, treatment to sales along with sales receipts. And the Front-End section specifically for prospective patients or customers so you can see about the Nastyaderm Karawang beauty clinic which you can see <a href="https://nastyadermofficial.com/" target="_blank">here</a>. In addition to clinics, there is also a special subdomain for information about tips on facial care which you can see <a href="https://blog.nastyadermofficial.com/" target="_blank">here</a>.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- Certificate Proficiency -->
    <section id="certificate" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Certificate</h2>
          <p>From the skill that i have, i have followed the certification and received certificates of proficiency from several organizers. The certificate below uses the blockchain method so that it cannot be edited or manipulated.</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-6 mb-3">
            <img src="<?= base_url('assets/img/serkom/sertifikat_flutter_mobile.webp'); ?>" width="100%" alt="">
          </div>
          <div class="col-lg-6 align-middle">
            <img src="<?= base_url('assets/img/serkom/serkom_cpdsa2.webp'); ?>" width="100%" alt="">
          </div>
          <div class="col-lg-6 mb-3">
            <img src="<?= base_url('assets/img/serkom/ijazah_kmd.webp'); ?>" width="100%" alt="">
          </div>
          <div class="col-lg-6 align-middle">
            <img src="<?= base_url('assets/img/serkom/sertifikat_ux.webp'); ?>" width="100%" alt="">
          </div>

          <!-- <div class="row mt-3">
              <div class="col-lg-12">
                <img src="<?= base_url('assets/img/serkom/sertifikat_flutter_mobile.webp'); ?>" width="100%" alt="">
              </div>
            </div> -->
        </div>
      </div>
    </section>
    <!-- End of Certificate Proficiency -->

    <!-- HKI -->
    <section id="hki" class="contact haki section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Intellectual Property Rights</h2>
          <p>I have some Intellectual Property Rights or Hak Kekayaan Intelektual (HaKI) in several fields from the Ministry of Justice and Human Rights of the Republic of Indonesia, collaborates with my colleagues in institutions.</p>
        </div>

        <div class="row" data-aos="fade-right">
          <div class="col-lg-4 mb-3">
            <a href="<?= base_url('assets/pdf/HKI-Foto-2019.pdf'); ?>" target="_blank"><img src="<?= base_url('assets/img/haki/haki_foto.webp'); ?>" width="100%" alt=""></a>
            <div class="text-center mt-2">
              Type of Creation : <span class="badge bg-success">Poster</span>
              <h5 class="fst-italic fw-bold">" Tips Strategi Promosi Efektif & Pelatihan Editing Video Promosi Produk Untuk Konten Media Sosial Bagi UKM "</h5>
              <div style="margin-top: -10px;"><small><i class="fa-solid fa-calendar"></i> Date Announced : 10 July 2021</small></div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <a href="<?= base_url('assets/pdf/HKI-Program Komputer-2167.pdf'); ?>" target="_blank"><img src="<?= base_url('assets/img/haki/haki_program.webp'); ?>" width="100%" alt=""></a>
            <div class="text-center mt-2">
              Type of Creation : <span class="badge bg-success">Computer Program</span>
              <h5 class="fst-italic fw-bold">" E-Accountant Naga Emas "</h5>
              <div style="margin-top: -10px;"><small><i class="fa-solid fa-calendar"></i> Date Announced : 9 September 2021</small></div>
            </div>
          </div>
          <div class="col-lg-4">
            <a href="<?= base_url('assets/pdf/HKI-Seni-2168.pdf'); ?>" target="_blank"><img src="<?= base_url('assets/img/haki/haki_seni.webp'); ?>" width="100%" alt=""></a>
            <div class="text-center mt-2">
              Type of Creation : <span class="badge bg-success">Poster</span>
              <h5 class="fst-italic fw-bold">" Pelatihan Desain Grafis "</h5>
              <div style="margin-top: -10px;"><small><i class="fa-solid fa-calendar"></i> Date Announced : 22 January 2022</small></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of HKI -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>If you want to contact me please send an email or can come directly to my office.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="row">
                <div class="col-lg-8">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Jl. Dewi Sartika Blok, Jl. H. Abdul Hamid No.77, RT.8/RW.4, Cawang, Kramat Jati, East Jakarta City, Jakarta 13630</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>yurisalkhalifi1@gmail.com</p>
                  </div>
                </div>
              </div>

              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.222691228324!2d106.866486!3d-6.249056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x984995f09174463!2sBina%20Sarana%20Informatika%2C%20BSI%20Dewi%20Sartika%20Head%20Office!5e0!3m2!1sid!2sid!4v1646212616814!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright &copy; <?= date('Y') ?> | <strong><span><a href="#" class="text-white">Yuris Alkhalifi</a></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        <!-- Designed by <a href="">BootstrapMade</a>  -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/'); ?>vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/aos/aos.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/fontawesome/js/all.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>

  <script>
    // Disable Right CLick
    document.addEventListener("contextmenu", function(event) {
      event.preventDefault();
      alert('Terimakasih, anda tidak menyalin apapun pada website saya ^_^');
    }, false);

    // Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>

</body>

</html>