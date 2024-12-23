<div id="create-modal" class="fixed top-0 left-0 w-screen h-screen bg-neutral-900 bg-opacity-50 hidden">
    <div class="flex flex-col items-center justify-center h-full">
        <div class="bg-neutral-800 p-12 rounded-lg flex flex-col items-center justify-center space-y-8 w-1/2 max-w-lg">
            <h2 class="text-3xl text-neutral-100 font-bold">Create Todo</h2>
            <form action="create.php" method="post" class="flex flex-col items-center w-full space-y-6">
                <input type="text" name="title" placeholder="Title"
                    class="bg-neutral-600 text-neutral-100 p-4 rounded-md w-full text-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <textarea name="description" placeholder="Description"
                    class="bg-neutral-600 text-neutral-100 p-4 rounded-md w-full h-32 text-lg resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                <button type="submit"
                    class="bg-blue-600 text-neutral-100 py-3 px-6 rounded-md w-full text-lg font-semibold hover:bg-blue-500 transition">
                    Create
                </button>
            </form>
            <button
                class="bg-neutral-600 text-neutral-100 py-3 px-6 rounded-md w-full text-lg font-medium hover:bg-neutral-500 transition"
                onclick="toggleCreateModal()">Close</button>
        </div>
    </div>
</div>