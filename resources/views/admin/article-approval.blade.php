@extends('layouts.main')

@section('title', 'Article approval')

@section('content')
    <div class="flex mt-5">
            <x-search-component/>
        <div class="ml-3">
        <svg width="86" height="86" viewBox="0 0 86 86" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_400_324)">
        <rect x="4" width="78" height="78" rx="39" fill="#EBEBEB"/>
        </g>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.7222 30.6819C34.7222 28.9097 35.5417 27.2102 37.0003 25.9571C38.4589 24.704 40.4372 24 42.5 24C44.5628 24 46.5411 24.704 47.9997 25.9571C49.4583 27.2102 50.2778 28.9097 50.2778 30.6819C50.2778 32.454 49.4583 34.1536 47.9997 35.4067C46.5411 36.6598 44.5628 37.3638 42.5 37.3638C40.4372 37.3638 38.4589 36.6598 37.0003 35.4067C35.5417 34.1536 34.7222 32.454 34.7222 30.6819ZM34.7222 40.7047C32.1437 40.7047 29.6708 41.5847 27.8476 43.1511C26.0243 44.7175 25 46.8419 25 49.0571C25 50.3862 25.6146 51.6609 26.7085 52.6007C27.8025 53.5405 29.2862 54.0685 30.8333 54.0685H54.1667C55.7138 54.0685 57.1975 53.5405 58.2915 52.6007C59.3854 51.6609 60 50.3862 60 49.0571C60 46.8419 58.9757 44.7175 57.1524 43.1511C55.3292 41.5847 52.8563 40.7047 50.2778 40.7047H34.7222Z" fill="#908989"/>
        <defs>
        <filter id="filter0_d_400_324" x="0" y="0" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="4"/>
        <feGaussianBlur stdDeviation="2"/>
        <feComposite in2="hardAlpha" operator="out"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_400_324"/>
        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_400_324" result="shape"/>
        </filter>
        </defs>
        </svg>
        </div>
    </div>
    
    <div class="mt-5">
        <svg width="1004" height="49" viewBox="0 0 1004 49" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="44" height="44" fill="url(#pattern0_400_319)"/>
        <rect x="960" width="44" height="44" fill="url(#pattern1_400_319)"/>
        <rect x="987" y="49" width="44" height="44" transform="rotate(180 987 49)" fill="url(#pattern2_400_319)"/>
        <path d="M909.432 33.192C907.928 33.192 906.696 32.848 905.736 32.16C904.792 31.456 904.264 30.504 904.152 29.304H905.88C905.96 30.04 906.304 30.64 906.912 31.104C907.536 31.552 908.368 31.776 909.408 31.776C910.32 31.776 911.032 31.56 911.544 31.128C912.072 30.696 912.336 30.16 912.336 29.52C912.336 29.072 912.192 28.704 911.904 28.416C911.616 28.128 911.248 27.904 910.8 27.744C910.368 27.568 909.776 27.384 909.024 27.192C908.048 26.936 907.256 26.68 906.648 26.424C906.04 26.168 905.52 25.792 905.088 25.296C904.672 24.784 904.464 24.104 904.464 23.256C904.464 22.616 904.656 22.024 905.04 21.48C905.424 20.936 905.968 20.504 906.672 20.184C907.376 19.864 908.176 19.704 909.072 19.704C910.48 19.704 911.616 20.064 912.48 20.784C913.344 21.488 913.808 22.464 913.872 23.712H912.192C912.144 22.944 911.84 22.328 911.28 21.864C910.736 21.384 909.984 21.144 909.024 21.144C908.176 21.144 907.488 21.344 906.96 21.744C906.432 22.144 906.168 22.64 906.168 23.232C906.168 23.744 906.32 24.168 906.624 24.504C906.944 24.824 907.336 25.08 907.8 25.272C908.264 25.448 908.888 25.648 909.672 25.872C910.616 26.128 911.368 26.376 911.928 26.616C912.488 26.856 912.968 27.208 913.368 27.672C913.768 28.136 913.976 28.752 913.992 29.52C913.992 30.224 913.8 30.856 913.416 31.416C913.032 31.96 912.496 32.392 911.808 32.712C911.12 33.032 910.328 33.192 909.432 33.192ZM922.89 33.192C921.658 33.192 920.546 32.92 919.554 32.376C918.578 31.816 917.802 31.032 917.226 30.024C916.666 29 916.386 27.808 916.386 26.448C916.386 25.088 916.674 23.904 917.25 22.896C917.826 21.872 918.61 21.088 919.602 20.544C920.594 19.984 921.706 19.704 922.938 19.704C924.17 19.704 925.282 19.984 926.274 20.544C927.282 21.088 928.066 21.872 928.626 22.896C929.202 23.904 929.49 25.088 929.49 26.448C929.49 27.792 929.202 28.976 928.626 30C928.05 31.024 927.258 31.816 926.25 32.376C925.242 32.92 924.122 33.192 922.89 33.192ZM922.89 31.728C923.754 31.728 924.554 31.536 925.29 31.152C926.026 30.752 926.618 30.16 927.066 29.376C927.53 28.576 927.762 27.6 927.762 26.448C927.762 25.296 927.538 24.328 927.09 23.544C926.642 22.744 926.05 22.152 925.314 21.768C924.578 21.368 923.778 21.168 922.914 21.168C922.05 21.168 921.25 21.368 920.514 21.768C919.778 22.152 919.186 22.744 918.738 23.544C918.306 24.328 918.09 25.296 918.09 26.448C918.09 27.6 918.306 28.576 918.738 29.376C919.186 30.16 919.77 30.752 920.49 31.152C921.226 31.536 922.026 31.728 922.89 31.728ZM934.233 22.224C934.601 21.408 935.161 20.776 935.913 20.328C936.681 19.88 937.617 19.656 938.721 19.656V21.408H938.265C937.049 21.408 936.073 21.736 935.337 22.392C934.601 23.048 934.233 24.144 934.233 25.68V33H932.553V19.896H934.233V22.224ZM943.432 21.312V29.448C943.432 30.248 943.584 30.8 943.888 31.104C944.192 31.408 944.728 31.56 945.496 31.56H947.032V33H945.232C944.048 33 943.168 32.728 942.592 32.184C942.016 31.624 941.728 30.712 941.728 29.448V21.312H939.904V19.896H941.728V16.608H943.432V19.896H947.032V21.312H943.432Z" fill="black" fill-opacity="0.75"/>
        <defs>
        <pattern id="pattern0_400_319" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image0_400_319" transform="scale(0.01)"/>
        </pattern>
        <pattern id="pattern1_400_319" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image1_400_319" transform="scale(0.01)"/>
        </pattern>
        <pattern id="pattern2_400_319" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image1_400_319" transform="scale(0.01)"/>
        </pattern>
        <image id="image0_400_319" width="100" height="100" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE/ElEQVR4nO2dWYgdRRSGazTuKyLuokRBfVCDgzrOS039f/WdqxkVwYvihj7HqFFcnhwXBE3wSVzigo4KEtzBlxh9EEGiKO6ISkTxVQQTk2hMpuVgD8hwq7szc293dc/54OcyFw5dfU4zt07VqdPGKIqiKIqiKIqiKIqiKIqiKIqiKHOMJEmyguTl8il/lzXsdruHk/QAektMVwA4b+CRsNaeTvJTkumcAHwi3xfZAriN5Lb/2y41Afjce3/WQIIxPj5+GMmfAxf6yVp7aMjWOXdT3c5gPPq10+kcteiAkLylIPo3B0xHAPwSgSPSWATg7kUHBMBMwUVm+tlNTk4eX7cDGJkAvLbogJB8suAij/ez894fUbcDGJlCD+9e4b1fWXCRi3OC+UHdTmBEkpmXGQQANgQu8kpBMM8G8EfdjmAcent6enqfgQSk1+vtS/JOAN8D+Dv7vEO+L7J1zp1B8lUAv0XglLRi/QPgB+/9PdbaZQMJhqIoiqIoijJMnHPjAJ4GsAnAeu/9WBm7sbGxg0iuJvlmZtsmvUPyIQAnmiohuYbk7Lw59iyAW/PsZHWT5JcR5APpMJXlWOdXEgzZjAKwJzCQPQDOCdmSfLFuZ7G6oGypJPkjua5gMI/0s7PWHihZfd2OYrWaGHpAALxcMIiXAgE5KQIHpRXr2qEHhOR9eYMAcG8gIMtIbo3ASWmFGv7viHPuFADbA8H4s9PpnByyBbA2AielFWmzqQqSU/OfdllWl72SPLter7c/yTcicFY6ZH0jD66pEgDHyjQXwKOyz54kyTElTWVv3QF4QPKXlmktgKu73e4BQ3a/oiiKoiitRspGSS7PKx8NMOK9P0EKj51zo01QkiQrrLXHmRix1h4pSyQkd2U5iFSezEgxXJEtyS6A7yLIFdKFFkrL1oOJhdHR0f1IfhzKTvNWOJ1zndBKcZME4K/KlteLIHlDwWCvC9kC+LpuZ3Jwet/EAIDnCgb6bD87a+3RETgxHaB2lSkMHDoaEMYVEOfc9XkD9d5fE7IF8FUEjkwHIQDvmRjI9jU2Bwb5Ud6POoAEwO66ncnFa2c0P+qCTG9lmju3JZvNOp4vM+2VmRbJbyNwarpAfUbyIhMjSZIcIonh1NTUwXtrKyeqmpYYJuW3GBRFURRFURZIdu789qzIYc1eLE3L0jsBPBhBUcL6OZF8TO5DtgVM03DOXdanX8k2AJfm2Uk1hlS9R5BLpCFJbRmAK01TsNaeSnJH4Ga259UjNahQbqecFjZNgOT9BU/YdM4+SpNKSdeZJrBUiq0BvGWaQIl/Ow+34TgCAj1bosM5d27OgZ3d0j6jBQd2Zsse0YsCqemdf6QtC9LqEkfavog9GADuMk1jYmLiQpJPkXxXWjYBuKDsoU8AqwC8HsEhzU1zIrlR8pGoKkoURVEURVGUOpFSH2lTR/JHKRiTtnUydy9TONbpdM6UKS/J3yvOL3YA+DCvSWdTGZGeiYFMfUOeoWTxESwwzgK40bSF7Eh08Iadc5c0oE3sVnkhgGkDJRopP9GERsoo2ExrDC1qNX6VaQNZ87G8gKxqQDP+WefcaaYNyHlCeS1FIBhbpLw09tdVAHjBtAl5uvoca5OK+OUll+5reaEL/qu8f0ZWnE0bkc0qqUDJ6yLXD5nhZKVAlb1uyHu/spElPoqiKIqiKIqiKIqiKIqiKIqiKKbd/At064uYRwuksQAAAABJRU5ErkJggg=="/>
        <image id="image1_400_319" width="100" height="100" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC2UlEQVR4nO3cvW4TQRiF4ZFoEDW0gPiHQAX9as4ZGyMFEgi+D64hiOvhpwI6KrgAahJIUNIhlAJIEzRokAwy9qy9Zj7vnkeaKuvZz37l2GtZdk5ERERERERERERExATv/eW4Ss8hzrmqqi6Q3CW53+/3r5Sep9NCCKdJbpE8SmuH5LnSc3VSVVVnSW6PxPi9tuPfSs/XuWcGgA9jYvxaAD7qmWIkBkeieO/Pl5631bz3Z3JijET5pChGYlBR7MWgoiwmBv98a6soyx6DI1HihWTp+7XM1xlbTcUYvXhUFDsxjhSlphDCxfQRyNGC114I4Wrp+7sMMXb/QwxFaTjGt4aOiWs3nrv0/V/aGAB+ALg77Tjvfb9GlD0A10o/Dksbwznnph2b9r5dI8p+56OQvDRLjNwgkaLUiAHgc24M7/29v26fFSQdO1CUBcaoGyQdryhNxCC59o99agWJANwB8D03ivd+xbVZ/GZIEzFmDRIpSjIYDE7lXoFjSox5gqTbrqVz5H7MctK1DYDNzAfgEMD6tP3mCZLmWY/nypzpiWsbkq8yY9zP3G+uIFE8V2aUN65tADybFiOE8CB3vyaCRPGcGVFeu7YB8GhSDJIbdfZrKkjaa2NSlDi7a5uqqo6TfDfuBRzAw7r7scEgUZxh3As9gLdxdtdGq6urJwA8Jvk+vf196r2/OctebDhIFEK4Ff+1ptnijJtx5ln26hwuIIjMgQpiCxXEFiqILVQQW6ggtlBBbKGC2EIFsYUKYgsVxBYqiC1UEFuoILZQQWyhgthCBbGFCmILFcQWKogtVBBbqCC2UEFsoYLYQgWxhQpiCxXEFiqILVQQW6ggtlBBbKGC2EIFsYUKYgsVxBYqiC0Avk4I8qX0fJ1D8sWEIM9Lz9c53vsVkgdjYhy09hd8rAsh3Ei/oXKYfoDgZa/Xu156rs4bDofH4io9h4iIiIiIiIiIiIiIOIt+AltdzO4x29OnAAAAAElFTkSuQmCC"/>
        </defs>
        </svg>
    </div>

    <div class="mt-3.5 mr-14 py-2">
        @for ($i = 0; $i < 5; $i++)
            <div class="flex h-66">
                <div class="flex flex-row">
                    <img src="/assets/yoga.jpg" alt="">
                    
                    <div class="px-8 bg-fitclub-dark-grey">
                        <h2 class="mt-8 mb-8 text-4xl font-poppins font-semibold">Manfaat yoga di pagi hari untuk Hipertensi, bisa kontrol tekanan darah? Apa benar?</h2>
                        <div>
                            <x-reject/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4"></div>
        @endfor
    </div>
@endsection