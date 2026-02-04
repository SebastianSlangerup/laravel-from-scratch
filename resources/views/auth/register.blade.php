<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label" for="name">Name</label>
            <input id="email" name="name" class="input" placeholder="Name" required />

            <label class="label" for="email">Email</label>
            <input id="email" name="email" type="email" class="input" placeholder="Email" required />

            <label class="label" for="password">Password</label>
            <input id="password" name="password" type="password" class="input" placeholder="Password" required />

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>
