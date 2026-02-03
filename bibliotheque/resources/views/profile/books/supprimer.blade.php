<body>
    <style>
        .btn.delete {
            background-color: #e74c3c;
            color: #fff;
            padding: 6px 14px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn.delete:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .btn.delete:active {
            transform: scale(0.95);
        }

        .btn.delete:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.35);
        }
    </style>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn delete"
            onclick="return confirm('Supprimer ce livre ?')">
            Supprimer
        </button>
    </form>
</body>