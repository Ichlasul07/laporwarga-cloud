<x-app-layout>

    <div class="min-h-screen bg-gray-100">

        <div class="bg-blue-600 text-white py-16">
            <div class="max-w-6xl mx-auto px-6">

                <h1 class="text-5xl font-bold mb-4">
                    LaporWarga Cloud
                </h1>

                <p class="text-xl opacity-90">
                    Sistem Pengaduan Masyarakat Berbasis Cloud Computing
                </p>

                <a href="/reports/create" class="inline-block mt-6 bg-white text-blue-600 px-6 py-3 rounded-xl font-bold">
                    Buat Laporan
                </a>

            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 py-10">

            <div class="grid md:grid-cols-3 gap-6 mb-10">

                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-gray-500">
                        Total Laporan
                    </h2>

                    <p class="text-4xl font-bold text-blue-600 mt-2">
                        {{ $reports->count() }}
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-gray-500">
                        Diproses
                    </h2>

                    <p class="text-4xl font-bold text-yellow-500 mt-2">
                        {{ $reports->where('status', 'diproses')->count() }}
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-gray-500">
                        Selesai
                    </h2>

                    <p class="text-4xl font-bold text-green-600 mt-2">
                        {{ $reports->where('status', 'selesai')->count() }}
                    </p>
                </div>

            </div>

            <div class="grid md:grid-cols-2 gap-6">

                @foreach ($reports as $report)
                    <div class="bg-white rounded-2xl shadow overflow-hidden">

                        <img src="{{ asset('storage/' . $report->photo) }}" class="w-full h-64 object-cover">

                        <div class="p-6">

                            <div class="flex justify-between">

                                <h2 class="text-2xl font-bold">
                                    {{ $report->title }}
                                </h2>

                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                                    {{ $report->status }}
                                </span>

                            </div>

                            <p class="text-gray-500 mt-2">
                                {{ $report->category }}
                            </p>

                            <p class="mt-4 text-gray-700">
                                {{ $report->description }}
                            </p>

                            <p class="mt-4 text-sm text-gray-400">
                                Lokasi: {{ $report->location }}
                            </p>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </div>

</x-app-layout>
