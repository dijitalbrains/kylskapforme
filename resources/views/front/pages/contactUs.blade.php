<x-app-layout>

    <h1>GET IN TOUCH WITH US</h1>

    <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT.</p>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-20 gap-y-10 my-14">
        <label class="font-bold text-sm uppercase">
            Name*<br>
            <input required="required" type="text" name="name" wire:model="name" class="bg-transparent border-b border-gray w-full focus:outline-none mt-3 py-1 focus:border-lime-350">
                        </label>
        <label class="font-bold text-sm uppercase">
            E-Mail*<br>
            <input required="required" type="email" name="email" wire:model="email" class="bg-transparent border-b border-gray w-full focus:outline-none mt-3 py-1 focus:border-lime-350">
                        </label>
        <label class="font-bold text-sm uppercase">
            Subject*<br>
            <input required="required" type="text" name="subject" wire:model="subject" class="bg-transparent border-b border-gray w-full focus:outline-none mt-3 py-1 focus:border-lime-350">
                        </label>

        <label class="font-bold text-sm uppercase lg:col-span-3">
            Message*<br>
            <textarea required="required" name="message" wire:model="message" class="bg-transparent border-b border-gray w-full focus:outline-none mt-3 py-1 focus:border-lime-350 h-24"></textarea>
                        </label>
    </div>

    <div class="text-center">
        <a href="search" class="btn-round-black inline-block  text-white px-20">
            Submit
        </a>
    </div>

</x-app-layout>
