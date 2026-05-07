<x-app-layout>

    <div class="min-h-screen bg-gray-100 py-10">

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow">

            <h1 class="text-4xl font-bold mb-2">
                Buat Laporan
            </h1>

            <p class="text-gray-500 mb-8">
                Laporkan masalah lingkungan dan pelayanan publik.
            </p>

            <form action="/reports" method="POST" enctype="multipart/form-data" class="space-y-6">

                @csrf

                <div>
                    <label class="font-semibold">
                        Judul Laporan
                    </label>

                    <input type="text" name="title" class="w-full border rounded-xl p-4 mt-2">
                </div>

                <div>
                    <label class="font-semibold">
                        Kategori
                    </label>

                    <select name="category" class="w-full border rounded-xl p-4 mt-2">

                        <option>Jalan Rusak</option>
                        <option>Sampah</option>
                        <option>Banjir</option>
                        <option>Lampu Jalan</option>

                    </select>
                </div>

                <div>
                    <label class="font-semibold">
                        Lokasi
                    </label>

                    <input type="text" name="location" class="w-full border rounded-xl p-4 mt-2">
                </div>

                <div>
                    <label class="font-semibold">
                        Deskripsi
                    </label>

                    <textarea name="description" rows="5" class="w-full border rounded-xl p-4 mt-2"></textarea>
                </div>

                <div>
                    <label class="font-semibold">
                        Upload Foto
                    </label>

                    <input type="file" name="photo" class="w-full border rounded-xl p-3 mt-2">
                </div>

                <button class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold">
                    Kirim Laporan
                </button>

            </form>

        </div>

    </div>

</x-app-layout>
