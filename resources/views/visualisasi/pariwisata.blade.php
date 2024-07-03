<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pariwisata') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div id="lineplot">
                        <py-script output="lineplot">
                            import matplotlib.pyplot as plt

                            data = [
                            {"periode_data": 2023, "nomor": 1, "bidang_usaha": "Aktivitas Agen Perjalanan Lainnya",
                            "jumlah_tenaga_kerja": 2574},
                            {"periode_data": 2023, "nomor": 2, "bidang_usaha": "Aktivitas Agen Perjalanan Wisata",
                            "jumlah_tenaga_kerja": 6466},
                            {"periode_data": 2023, "nomor": 3, "bidang_usaha": "Aktivitas Biro Perjalanan Lainnya",
                            "jumlah_tenaga_kerja": 2328},
                            {"periode_data": 2023, "nomor": 4, "bidang_usaha": "Aktivitas Biro Perjalanan Wisata",
                            "jumlah_tenaga_kerja": 11924},
                            {"periode_data": 2023, "nomor": 5, "bidang_usaha": "Aktivitas Hiburan dan Rekreasi Lainnya
                            Ytdl", "jumlah_tenaga_kerja": 698.0},
                            {"periode_data": 2023, "nomor": 6, "bidang_usaha": "Aktivitas Hiburan Seni dan Kreativitas
                            Lainnya", "jumlah_tenaga_kerja": 2944},
                            {"periode_data": 2023, "nomor": 7, "bidang_usaha": "Aktivitas Impresariat Bidang Seni dan
                            Festival Seni", "jumlah_tenaga_kerja": 3877},
                            {"periode_data": 2023, "nomor": 8, "bidang_usaha": "Aktivitas Kebugaran Lainnya",
                            "jumlah_tenaga_kerja": 766.0},
                            {"periode_data": 2023, "nomor": 9, "bidang_usaha": "Aktivitas Konsultansi Pariwisata",
                            "jumlah_tenaga_kerja": 8368},
                            {"periode_data": 2023, "nomor": 10, "bidang_usaha": "Aktivitas Olahraga Tradisional",
                            "jumlah_tenaga_kerja": 129.0},
                            {"periode_data": 2023, "nomor": 11, "bidang_usaha": "Aktivitas Operasional Fasilitas Seni",
                            "jumlah_tenaga_kerja": 676.0},
                            {"periode_data": 2023, "nomor": 12, "bidang_usaha": "Aktivitas Pekerja Seni dan Pekerja
                            Kreatif Lainnya", "jumlah_tenaga_kerja": 2051},
                            {"periode_data": 2023, "nomor": 13, "bidang_usaha": "Aktivitas Pelaku Kreatif Seni Rupa",
                            "jumlah_tenaga_kerja": 806.0},
                            {"periode_data": 2023, "nomor": 14, "bidang_usaha": "Aktivitas Penunjang Seni Pertunjukan",
                            "jumlah_tenaga_kerja": 2716},
                            {"periode_data": 2023, "nomor": 15, "bidang_usaha": "Aktivitas Perburuan",
                            "jumlah_tenaga_kerja": 13.0}
                            ]

                            # Extract data
                            bidang_usaha = [item['bidang_usaha'] for item in data]
                            jumlah_tenaga_kerja = [item['jumlah_tenaga_kerja'] for item in data]

                            # Plotting the data
                            fig, ax = plt.subplots(figsize=(10, 8))
                            ax.barh(bidang_usaha, jumlah_tenaga_kerja, color='skyblue')
                            ax.set_xlabel('Jumlah Tenaga Kerja')
                            ax.set_ylabel('Bidang Usaha')
                            ax.set_title('Jumlah Tenaga Kerja per Bidang Usaha pada Tahun 2023')

                            # Display the plot
                            plt.tight_layout()
                            plt.show()

                        </py-script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
