<div class="kt-header__topbar-item kt-header__topbar-item--user">
    <div class="kt-header__topbar-wrapper" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
            <span class="kt-header__topbar-username kt-hidden-mobile">{{auth()->user()->first_name}}</span>
            {{-- <img class="kt-hidden" alt="Pic" src="/storage/users/{{auth()->user()->avatar}}" /> --}}

            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span
                class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold text-capitalize">{{auth()->user()->idfirst_name}}</span>
        </div>
    </div>

</div>
