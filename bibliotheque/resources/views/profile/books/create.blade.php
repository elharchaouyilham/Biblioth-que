<body>
    <style>
        form {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 4px rgba(74, 144, 226, 0.4);
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #357abd;
        }
    </style>
    <form action="{{ route('books.create') }}" method="get">
        <div>
            <label for="titre">Titre du book :</label><br>
            <input type="text" id="titre" name="titre" required>
        </div>

        <br>

        <div>
            <label for="description">Description :</label><br>
            <textarea id="description" name="description" rows="5" required></textarea>
        </div>

        <br>

        <button type="submit">Ajouter le book</button>
    </form>
</body>