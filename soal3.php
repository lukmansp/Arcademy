<!DOCTYPE html>
<html>
<head>
  <title>menghitung jabat tangan</title>
</head>
<body>
<script>

        window.onload = function () {
            jabat_tangan(10);
        }

        function jabat_tangan(tamu){

            var total = 0;
            for (let index = tamu - 1; index > 0; index--) {
                total += index;
            }

            document.write("dari "+tamu+" tamu , berjabat tangan sebanyak "+total+" kali");

        }

    </script>

</body>
</html>