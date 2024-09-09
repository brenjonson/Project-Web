<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พบของหาย</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="min-h-screen flex flex-col  text-white">
    @yield('contentUpload')
</body>

</html>




<script>
    // อัพภาพหลัก
    document.getElementById('file_input').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const imgElement = document.getElementById('preview');
                imgElement.src = e.target.result;
                imgElement.style.display = 'block';
            }

            reader.readAsDataURL(file);
        }
    });

    // อัพภาพเพิ่มเติม
    document.getElementById('file_input_more').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('preview-container');
        const warningElement = document.getElementById('file_count_warning');
        previewContainer.innerHTML = '';
        warningElement.textContent = '';

        if (files.length > 3) {
            warningElement.textContent = 'คุณสามารถอัปโหลดได้สูงสุด 3 ไฟล์เท่านั้น.';
            event.target.value = '';
            return;
        }

        Array.from(files).forEach(file => {
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('w-24', 'h-auto', 'border', 'border-gray-300', 'rounded-lg');
                    img.alt = 'Image Preview';
                    previewContainer.appendChild(img);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>

<script>
    function toggleDropdown() {
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
    }

    // Close dropdown if clicked outside
    window.onclick = function(event) {
        const dropdownMenu = document.getElementById('dropdownMenu');
        if (!event.target.matches('button')) {
            if (!dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.add('hidden');
            }
        }
    };
</script>