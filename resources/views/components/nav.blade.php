<style>
    .nav {
        position: fixed;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 8px;
        background-color: rgba(255, 255, 255, 0.95);
        border: 1px solid #ccc;
        border-radius: 12px;
        padding: 12px 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 999;
        font-family: Arial, sans-serif;
    }

    .nav a {
        background-color: #007bff;
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        text-decoration: none;
        text-align: center;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .nav a:hover {
        background-color: #0056b3;
    }

    .nav a.active {
        background-color: #28a745; /* Hijau */
        font-weight: bold;
    }

    @media print {
        .nav {
            display: none !important;
        }
    }
</style>

<div class="nav">
    @foreach (range('A', 'K') as $letter)
        <a href="/{{ $letter }}"
            class="{{ request()->is($letter) ? 'active' : '' }}">
            {{ $letter }}
        </a>
    @endforeach
</div>
