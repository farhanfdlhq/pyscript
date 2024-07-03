<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div id="lineplot">
                        <py-script output="lineplot">
                            import matplotlib.pyplot as plt
                            fig, ax = plt.subplots()

                            year_1 = [2016, 2017, 2018, 2019, 2020, 2021]
                            population_1 = [42, 43, 45, 47, 48, 50]

                            year_2 = [2016, 2017, 2018, 2019, 2020, 2021]
                            population_2 = [43, 43, 44, 44, 45, 45]

                            plt.plot(year_1, population_1, marker='o', linestyle='--', color='g',
                            label='country 1')

                            plt.plot(year_2, population_2, marker='d', linestyle='-', color='r',
                            label='country 2')

                            plt.xlabel('year')
                            plt.ylabel('population (M)')
                            plt.title('year vs population')
                            plt.legend(loc='lower right')

                            fig

                        </py-script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
