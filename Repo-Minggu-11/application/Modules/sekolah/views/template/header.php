<html>
<title>
    <?= $title; ?>
</title>

<head>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>bootstrap.min.css">

</head>

<body>
    <div class="container-sm">


        <div class="blockquote">
            <br>

            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <a class="navbar-brand" href="<?= base_url('sekolah/awal') ?>">CRUD - Codeigniter ( 02734 )</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('sekolah/awal') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('sekolah/awal/sekolah') ?>">Sekolah</a>
                        </li>

                    </ul>

                </div>
            </nav>
            <?= $this->session->flashdata('message'); ?>
