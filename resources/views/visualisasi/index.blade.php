<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css">
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>

    <py-env>
        - matplotlib
    </py-env>

    <style>
        #lineplot {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <h1>Matplotlib</h1>
    <py-script>
        print("Grafik Year vspopulation")
    </py-script>

    <div id="lineplot">
        <py-script output="lineplot">
            import matplotlib.pyplot as plt
            fig, ax = plt.subplots()

            year_1 = [2016, 2017, 2018, 2019, 2020, 2021]
            population_1 = [42, 43, 45, 47, 48, 50]

            year_2 = [2016, 2017, 2018, 2019, 2020, 2021]
            population_2 = [43, 43, 44, 44, 45, 45]

            plt.plot(year_1, population_1, marker='o', linestyle='--', color='g', label='country 1')

            plt.plot(year_2, population_2, marker='d', linestyle='-', color='r', label='country 2')

            plt.xlabel('year')
            plt.ylabel('population (M)')
            plt.title('year vs population')
            plt.legend(loc='lower right')

            fig


            {{-- import matplotlib.pyplot as plt

        fig = plt.figure()

        tahun = [2015, 2016, 2017, 2018, 2019, 2020]
        jumlah_lulusan = [200, 150, 180, 160, 150, 190]

        plt.plot(tahun, jumlah_lulusan)
        plt.xlabel('Tahun')
        plt.ylabel('Jumlah Lulusan')
        plt.title('Data Jumlah Lulusan Prodi Sistem Informasi Unbin 2015-2020')

        fig --}}

        </py-script>
    </div>
</body>

</html>
