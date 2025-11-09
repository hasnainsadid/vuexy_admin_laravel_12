<aside id="layout-menu" class="layout-menu menu-vertical menu"
    style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

    <div class="app-brand demo ">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span class="text-primary">
                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                            fill="currentColor"></path>
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616"></path>
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-3">Vuexy</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
            <i class="icon-base ti tabler-x d-block d-xl-none"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1 ps ps--active-y">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon icon-base ti tabler-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Forms &amp; Tables">Forms &amp; Tables</span>
        </li>
        <!-- Forms -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-toggle-left"></i>
                <div data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="forms-basic-inputs.html" class="menu-link">
                        <div data-i18n="Basic Inputs">Basic Inputs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div data-i18n="Input groups">Input groups</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-custom-options.html" class="menu-link">
                        <div data-i18n="Custom Options">Custom Options</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-editors.html" class="menu-link">
                        <div data-i18n="Editors">Editors</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-file-upload.html" class="menu-link">
                        <div data-i18n="File Upload">File Upload</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-pickers.html" class="menu-link">
                        <div data-i18n="Pickers">Pickers</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-selects.html" class="menu-link">
                        <div data-i18n="Select &amp; Tags">Select &amp; Tags</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-sliders.html" class="menu-link">
                        <div data-i18n="Sliders">Sliders</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-switches.html" class="menu-link">
                        <div data-i18n="Switches">Switches</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-extras.html" class="menu-link">
                        <div data-i18n="Extras">Extras</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-layout-navbar"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div data-i18n="Vertical Form">Vertical Form</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-horizontal.html" class="menu-link">
                        <div data-i18n="Horizontal Form">Horizontal Form</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-sticky.html" class="menu-link">
                        <div data-i18n="Sticky Actions">Sticky Actions</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-text-wrap-disabled"></i>
                <div data-i18n="Form Wizard">Form Wizard</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-wizard-numbered.html" class="menu-link">
                        <div data-i18n="Numbered">Numbered</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-wizard-icons.html" class="menu-link">
                        <div data-i18n="Icons">Icons</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-checkbox"></i>
                <div data-i18n="Form Validation">Form Validation</div>
            </a>
        </li> --}}
        <!-- Tables -->
        {{-- <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-table"></i>
                <div data-i18n="Tables">Tables</div>
            </a>
        </li> --}}
    </ul>
</aside>
