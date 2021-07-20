<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700|Mukta:500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/style.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>


<main>
    <section class="hero">

        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <a href="<?php echo base_url(''); ?>" class="btn btn-primary float-left mb-3 center">Home</a>
                    <CENTER>
                        <h1 class="hero-title h2-mobile mt-0 is-revealing">PENGELUARAN /BULAN</h1>
                    </CENTER>

                    <h1 class="hero-title h2-mobile mt-0 is-revealing"><?php foreach ($antrianlast as $key => $data40) {
                                                                            if ($data40['antrian_id'] == $aa) {
                                                                                echo "CS";
                                                                            }
                                                                            if ($data40['antrian_id'] == $bb) {
                                                                                echo "PGDN";
                                                                            }
                                                                            if ($data40['antrian_id'] == $cc) {
                                                                                echo "PB";
                                                                            }
                                                                            if ($data40['antrian_id'] == $dd) {
                                                                                echo "PNG";
                                                                            }
                                                                            echo $data40['antrian_id'];
                                                                        } ?></h1>
                </div>
                <div class="container mt-5 mb-5 text-center">

                </div>
                <!--     <div class="container">
        <?php
        if (!empty(session()->getFlashdata('success'))) { ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success'); ?>
        </div>
             
        <?php } ?>
        <?php if (!empty(session()->getFlashdata('info'))) { ?>
 
        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info'); ?>
        </div>
             
        <?php } ?>
 
        <?php if (!empty(session()->getFlashdata('warning'))) { ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning'); ?>
        </div>
             
        <?php } ?>
    </div> -->


                <section class="features section text-center">
                    <div class="section-square"></div>
                    <div class="container">
                        <div class="features-inner section-inner">
                            <div class="features-wrap">

                                <div class="feature is-revealing">

                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-1-a">
                                                        <stop stop-color="#007CFE" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#007DFF" offset="100%" />
                                                    </linearGradient>
                                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-1-b">
                                                        <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#FF4F7A" offset="100%" />
                                                    </linearGradient>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <path d="M8 0h24v24a8 8 0 0 1-8 8H0V8a8 8 0 0 1 8-8z" fill="url(#feature-1-a)" />
                                                    <path d="M48 16v24a8 8 0 0 1-8 8H16c0-17.673 14.327-32 32-32z" fill="url(#feature-1-b)" />
                                                </g>
                                            </svg>
                                        </div>
                                        <h4 class="feature-title h3-mobile">PENGELUARAN BULAN MEI</h4>
                                        <p class="text-sm">TOTAL 6.000.000 <?php echo $aa; ?></p>
                                    </div>

                                </div>
                                <div class="feature is-revealing">

                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-2-a">
                                                        <stop stop-color="#007CFE" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#007DFF" offset="100%" />
                                                    </linearGradient>
                                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-2-b">
                                                        <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#FF4F7A" offset="100%" />
                                                    </linearGradient>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <path d="M0 0h32v7c0 13.807-11.193 25-25 25H0V0z" fill="url(#feature-2-a)" />
                                                    <path d="M48 16v7c0 13.807-11.193 25-25 25h-7c0-17.673 14.327-32 32-32z" fill="url(#feature-2-b)" transform="matrix(1 0 0 -1 0 64)" />
                                                </g>
                                            </svg>

                                        </div>
                                        <h4 class="feature-title h3-mobile">PENGELUARAN BULAN JULI</h4>
                                        <p class="text-sm">TOTAL : 9.000.000<?php echo  $bb; ?>.</p>
                                    </div>

                                </div>
                                <div class="feature is-revealing">

                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-a">
                                                        <stop stop-color="#007CFE" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#007DFF" offset="100%" />
                                                    </linearGradient>
                                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-b">
                                                        <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#FF4F7A" offset="100%" />
                                                    </linearGradient>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <circle fill="url(#feature-3-a)" cx="16" cy="16" r="16" />
                                                    <path d="M16 16c17.673 0 32 14.327 32 32H16V16z" fill="url(#feature-3-b)" />
                                                </g>
                                            </svg>

                                        </div>
                                        <h4 class="feature-title h3-mobile">PENGELUARAN BULAN AGUSTUS</h4>
                                        <p class="text-sm">TOTAL 8.000.000 <?php echo $cc; ?></p>
                                    </div>
                                    </a>
                                </div>
                                <div class="feature is-revealing">

                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-4-a">
                                                        <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#FF4F7A" offset="100%" />
                                                    </linearGradient>
                                                    <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-4-b">
                                                        <stop stop-color="#007CFE" stop-opacity="0" offset="0%" />
                                                        <stop stop-color="#007DFF" offset="100%" />
                                                    </linearGradient>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <path d="M32 16h16v16c0 8.837-7.163 16-16 16H16V32c0-8.837 7.163-16 16-16z" fill="url(#feature-4-a)" />
                                                    <path d="M16 0h16v16c0 8.837-7.163 16-16 16H0V16C0 7.163 7.163 0 16 0z" fill="url(#feature-4-b)" />
                                                </g>
                                            </svg>

                                        </div>
                                        <h4 class="feature-title h3-mobile">PENGELUARAN BULAN SEPTEMBER</h4>
                                        <p class="text-sm">TOTAL 10.000.000<?php echo $dd;   ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


</main>

<footer class="site-footer text-light">
    <div class="container">
        <div class="site-footer-inner has-top-divider">
            <div class="brand footer-brand">
                <a href="#">
                    <svg width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg">
                        <title>YUSUF MUHAMMAD</title>
                        <defs>
                            <linearGradient x1="0%" y1="100%" y2="0%" id="logo-footer-a">
                                <stop stop-color="#007CFE" stop-opacity="0" offset="0%" />
                                <stop stop-color="#007DFF" offset="100%" />
                            </linearGradient>
                            <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="logo-footer-b">
                                <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                <stop stop-color="#FF4F7A" offset="100%" />
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <rect fill="url(#logo-footer-a)" width="32" height="32" rx="16" />
                            <rect fill="url(#logo-footer-b)" x="16" width="32" height="32" rx="16" />
                        </g>
                    </svg>
                </a>
            </div>

            </ul>
            <div class="footer-copyright">YUSUF MUHAMMAD</div>
        </div>
    </div>
</footer>
</div>

<script src="<?php echo base_url('dist/js/main.min.js'); ?>"></script>
</body>

</html>