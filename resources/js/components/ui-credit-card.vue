<template>
    <svg v-if="!newCard" xmlns="http://www.w3.org/2000/svg" width="350" height="200" viewBox="0 0 350 200" fill="none">
        <g clip-path="url(#clip0_24_10)">
            <rect width="350" height="200" rx="4" fill="#3D3D3D"/>
            <rect x="-28.0172" y="73.0001" width="239" height="82" transform="rotate(45 -28.0172 73.0001)" fill="#92E3A9"/>
            <rect x="1.98276" y="-13" width="331.795" height="82" transform="rotate(45 1.98276 -13)" fill="url(#paint0_linear_24_10)"/>
            <rect x="59.9828" y="-71" width="396.543" height="82" transform="rotate(45 59.9828 -71)" fill="url(#paint1_linear_24_10)"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M320.887 173.002C318.709 173.052 316.758 173.647 315.327 174.699C315.014 174.929 314.464 175.452 314.23 175.741C313.592 176.527 313.203 177.422 313.073 178.402C313.021 178.79 313.021 179.398 313.073 179.739C313.296 181.215 314.363 182.485 316.295 183.574C316.451 183.662 316.948 183.92 317.4 184.147C318.705 184.803 319.205 185.141 319.527 185.584C319.703 185.826 319.778 186.058 319.776 186.357C319.77 187.241 319.032 187.855 317.684 188.097C317.4 188.148 317.28 188.155 316.635 188.154C315.02 188.154 313.879 187.899 312.297 187.186C312.086 187.091 311.909 187.018 311.904 187.023C311.889 187.039 311.025 191.03 311.034 191.038C311.039 191.042 311.16 191.091 311.303 191.148C312.173 191.492 313.472 191.779 314.801 191.918C315.995 192.044 317.374 192.024 318.442 191.866C321.967 191.345 324.272 189.486 324.761 186.77C324.883 186.097 324.882 185.355 324.76 184.762C324.52 183.595 323.8 182.615 322.539 181.738C322.025 181.382 321.548 181.109 320.302 180.461C319.221 179.9 318.844 179.66 318.493 179.315C318.244 179.071 318.124 178.867 318.077 178.615C317.994 178.174 318.277 177.65 318.768 177.335C319.592 176.806 321.069 176.695 322.799 177.032C323.39 177.148 324.208 177.402 324.744 177.638C324.851 177.685 324.898 177.695 324.906 177.673C324.929 177.61 325.751 173.818 325.743 173.811C325.739 173.806 325.524 173.734 325.265 173.65C324.16 173.291 322.91 173.058 321.902 173.022C321.694 173.015 321.443 173.006 321.342 173.003C321.242 172.999 321.037 172.999 320.887 173.002ZM282.046 173.578C282.02 173.708 281.999 173.825 282 173.84C282.001 173.854 282.046 173.875 282.101 173.887C283.825 174.266 285.601 174.84 286.59 175.338C287.249 175.669 287.534 175.944 287.726 176.431C287.834 176.707 287.769 176.463 289.846 184.353C290.885 188.297 291.746 191.567 291.76 191.62L291.786 191.716L294.353 191.715L296.921 191.714L300.796 182.639C302.927 177.647 304.691 173.513 304.716 173.453L304.761 173.342H302.218H299.674L297.187 179.511C295.819 182.904 294.687 185.713 294.672 185.754C294.656 185.795 294.638 185.822 294.631 185.816C294.625 185.809 294.163 183.422 293.605 180.511C293.048 177.6 292.567 175.126 292.537 175.013C292.467 174.751 292.291 174.397 292.12 174.176C291.86 173.84 291.425 173.55 290.977 173.414L290.783 173.355L286.438 173.348L282.093 173.341L282.046 173.578ZM306.822 173.476C306.807 173.55 305.939 177.531 304.893 182.325C303.847 187.118 302.958 191.191 302.918 191.377L302.845 191.716H305.268H307.691L308.883 186.248C309.538 183.241 310.44 179.107 310.886 177.061L311.697 173.342H309.273H306.85L306.822 173.476ZM333.579 173.36C332.884 173.475 332.277 173.913 331.96 174.529C331.924 174.599 330.323 178.337 328.403 182.835C326.483 187.333 324.844 191.172 324.762 191.365L324.612 191.716H327.155H329.697L330.142 190.51C330.387 189.847 330.613 189.232 330.645 189.144L330.703 188.985H333.816H336.929L336.968 189.157C336.989 189.252 337.122 189.866 337.262 190.522L337.516 191.716H339.758H342L341.949 191.479C341.921 191.35 341.041 187.218 339.994 182.299L338.091 173.355L335.868 173.352C334.645 173.35 333.615 173.354 333.579 173.36ZM335.399 181.775C335.799 183.655 336.123 185.197 336.118 185.201C336.114 185.205 335.21 185.206 334.108 185.202L332.106 185.195L333.272 182.044C334.731 178.096 334.654 178.303 334.664 178.333C334.668 178.346 334.999 179.895 335.399 181.775Z" fill="white"/>
            <text fill="white" xml:space="preserve" style="white-space: pre" font-family="Poppins" font-size="32" font-weight="500" letter-spacing="0em">
                <tspan x="177" y="111.2">{{ amount }}</tspan></text>
            <text fill="white" xml:space="preserve" style="white-space: pre" font-family="Poppins" font-size="16" font-weight="600" letter-spacing="0em">
                <tspan x="8" y="23.6">Bank App</tspan></text>
            <text fill="white" xml:space="preserve" style="white-space: pre" font-family="Poppins" font-size="16" font-weight="600" letter-spacing="0em">
                <tspan x="8" y="185.6">{{ number }}</tspan></text>
            <text fill="white" fill-opacity="0.5" xml:space="preserve" style="white-space: pre" font-family="Poppins" font-size="16" font-weight="600" letter-spacing="0em">
                <tspan x="166" y="185.6">{{ date }}</tspan></text>
        </g>
        <defs>
            <linearGradient id="paint0_linear_24_10" x1="193.267" y1="-193.678" x2="187.572" y2="64.7765" gradientUnits="userSpaceOnUse">
                <stop stop-color="#92E3A9" stop-opacity="0.2"/>
                <stop offset="1" stop-color="#3D3D3D"/>
            </linearGradient>
            <linearGradient id="paint1_linear_24_10" x1="271.936" y1="-231.879" x2="271.311" y2="14.1964" gradientUnits="userSpaceOnUse">
                <stop stop-color="#92E3A9" stop-opacity="0.2"/>
                <stop offset="1" stop-color="#3D3D3D" stop-opacity="0.2"/>
            </linearGradient>
            <clipPath id="clip0_24_10">
                <rect width="350" height="200" rx="4" fill="white"/>
            </clipPath>
        </defs>
    </svg>

    <svg v-if="newCard" class="ui-new-card" xmlns="http://www.w3.org/2000/svg"
         width="350" height="200" viewBox="0 0 350 200" fill="transparent">
        <g clip-path="url(#clip0_76_21)">
            <rect x="1.5" y="1.5" width="347" height="197" rx="2.5" stroke="#595959" stroke-width="3" stroke-dasharray="8 8"/>
            <text fill="#00FF85" xml:space="preserve" style="white-space: pre" font-family="Poppins" font-size="20" font-weight="600" letter-spacing="0em"><tspan x="140.023" y="106">Create new Card</tspan></text>
            <path d="M67.3333 100H83M83 100H98.6667M83 100V115.667M83 100V84.3333" stroke="#00FF85" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="83" cy="100" r="35.25" stroke="#00FF85" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
            <clipPath id="clip0_76_21">
                <rect width="350" height="200" rx="4" fill="white"/>
            </clipPath>
        </defs>
    </svg>
</template>

<script>
export default {
    name: "ui-credit-card",
    props: {
        date: String,
        number: String,
        amount: String,
        newCard: Boolean
    }
}
</script>

<style scoped>

</style>
