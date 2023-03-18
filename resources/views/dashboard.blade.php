<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container bg-blue-400">
        
        <!-- Trigger button -->
        <button
            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600"
            onclick="openModal()">
            Open Modal
        </button>

        <!-- Modal container -->
        <div
            id="myModal"
            class="fixed inset-0 z-10 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <!-- Modal content -->
            <div class="bg-white w-1/2 rounded-lg p-8">
                <h2 class="text-xl font-bold mb-4">Modal Title</h2>
                <p class="mb-4">Modal content goes here.</p>
                <button
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600"
                    onclick="closeModal()">
                    Close Modal
                </button>
            </div>
        </div>
    </div>
    <script>
        // JavaScript functions to show/hide the modal
        function openModal() {
            document.getElementById("myModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("myModal").classList.add("hidden");
        }
    </script>
</body>
</html>