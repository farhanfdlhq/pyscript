<!-- resources/views/visualisasi/kesehatan.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kesehatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're in Kesehatan page!") }}
                </div>
                <div class="p-6 text-gray-900">
                    <py-script>
                        import matplotlib.pyplot as plt
                        import io
                        from js import document
                        from matplotlib.backends.backend_agg import FigureCanvasAgg as FigureCanvas

                        # Data untuk grafik
                        x = [1, 2, 3, 4, 5]
                        y = [10, 20, 25, 30, 40]

                        # Membuat grafik
                        fig, ax = plt.subplots()
                        ax.plot(x, y)

                        # Konversi grafik ke format gambar dan tampilkan di HTML
                        buf = io.BytesIO()
                        fig.savefig(buf, format='png')
                        buf.seek(0)
                        img_str = 'data:image/png;base64,' + buf.getvalue().decode('base64')

                        # Tambahkan gambar ke elemen HTML
                        img_element = document.createElement('img')
                        img_element.src = img_str
                        document.body.appendChild(img_element)
                    </py-script>
                </div>
            </div>
            <!-- Tambahkan elemen PyScript di sini untuk menampilkan grafik -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
