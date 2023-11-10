
        function filtrerMedias() {
            var selectTypeMedia = document.getElementById("type_media");
            var selectedType = selectTypeMedia.value;
            var listeMedias = document.getElementById("liste_medias").getElementsByTagName("li");

            for (var i = 0; i < listeMedias.length; i++) {
                var media = listeMedias[i];
                var typeMedia = media.getAttribute("data-type-media");

                if (selectedType === "Tous" || typeMedia === selectedType) {
                    media.style.display = "block";
                } else {
                    media.style.display = "none";
                }
            }
        }
