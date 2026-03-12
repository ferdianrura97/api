<div class="rounded-lg border border-amber-300 bg-amber-50 p-3 text-sm text-amber-900">
    <p class="font-semibold uppercase">Perlu keputusan bisnis</p>
    <ul class="mt-2 list-disc space-y-1 pl-5">
        @foreach ($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
