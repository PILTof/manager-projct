<script>
    document.addEventListener("app:mounted", () => {
        window.route = collect(@json($routes))
    })
</script>
@include("header")
<div id="app">
    <router-view></router-view>
</div>
@include('footer')