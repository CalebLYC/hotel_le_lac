<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="/images/favicon.png" type="image/gif" />

    <title>Shapel</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- lightbox Gallery-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/ekko-lightbox.css') }}" />

    <!-- font awesome style -->
    <link href="{{ asset('assets/admin/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" />
    <style>
        .dropzone {
            width: 1300px;
            height: 200px;
            border: 2px dashed #ccc;
            text-align: center;
            line-height: 200px;
            cursor: pointer;
        }

        .resizeimg {
            width: 90px;
            height: 90px;
        }


        img.preview {
            max-width: 100%;
            max-height: 100%;
        }

        span {
            color: red;
        }

        h5 {
            margin: 0px 0px 0px 500px;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        h2 {
            margin: 0px 0px 0px 500px;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .button-container {
            text-align: center;
            margin-top: 10px;
        }

        .button-container button {
            margin: 0 10px;
        }
    </style>


</head>

<body>
    @include('admin.partials.header')

    @yield('content')

    <!-- jQery -->
    <script src="{{ asset('assets/admin/js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/admin/js/bootstrap.js') }}"></script>
    <!-- lightbox Gallery-->
    <script src="{{ asset('assets/admin/js/ekko-lightbox.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropzone = document.getElementById("dropzone");
            const fileInput = document.getElementById("fileInput");
            const viewButton = document.getElementById("viewButton");
            const deleteButton = document.getElementById("deleteButton");
            let previewImage;

            dropzone.addEventListener("click", function() {
                fileInput.click();
            });

            fileInput.addEventListener("change", function() {
                const file = this.files[0];
                if (file && file.type.startsWith("image/")) {
                    const reader = new FileReader();

                    reader.addEventListener("load", function() {
                        const imageUrl = this.result;
                        previewImage = new Image();
                        previewImage.src = imageUrl;
                        previewImage.classList.add("preview");

                        dropzone.innerHTML = ""; // Effacer le contenu précédent de la zone
                        dropzone.appendChild(previewImage);

                        viewButton.style.display = "block"; // Afficher le bouton "Voir"
                        deleteButton.style.display = "block"; // Afficher le bouton "Supprimer"
                    });

                    reader.readAsDataURL(file);
                }
            });

            viewButton.addEventListener("click", function() {
                if (previewImage) {
                    window.open(previewImage.src, "_blank");
                }
            });

            deleteButton.addEventListener("click", function() {
                dropzone.innerHTML =
                    '<p>Cliquez ici ou faites glisser une image ici pour la télécharger.</p>';
                viewButton.style.display = "none"; // Cacher le bouton "Voir"
                deleteButton.style.display = "none"; // Cacher le bouton "Supprimer"
                fileInput.value = ""; // Réinitialiser le champ de fichier
                previewImage = null; // Réinitialiser l'aperçu de l'image
            });
        });
    </script>
</body>

</html>
