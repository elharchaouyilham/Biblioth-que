<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Bibliothèque Municipale</title>
    <link rel="stylesheet" href="../css/styl.css">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #333;
        }

        .auth-box {
            width: 350px;
            margin: 80px auto;
            padding: 25px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .auth-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .auth-box form {
            display: flex;
            flex-direction: column;
        }

        .auth-box input,
        .auth-box select {
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .auth-box button {
            padding: 10px;
            background: #2c7be5;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .auth-box button:hover {
            background: #1a68d1;
        }

        .auth-box .link {
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            color: #2c7be5;
            font-size: 14px;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .hidden {
            display: none;
        }

        .sidebar {
            width: 230px;
            background: #1f2937;
            color: #fff;
            padding: 20px;
        }

        .sidebar h3 {
            margin-bottom: 25px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 8px;
            background: #374151;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
        }

        .sidebar a:hover {
            background: #4b5563;
        }

        .content {
            flex: 1;
            padding: 25px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .cards {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            flex: 1;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .card h4 {
            margin-bottom: 10px;
            color: #555;
        }

        .card p {
            font-size: 26px;
            font-weight: bold;
            color: #2c7be5;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 30px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        th {
            background: #f1f5f9;
        }

        tr:hover {
            background: #f9fafb;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 13px;
            margin-right: 5px;
        }

        .add {
            background: #10b981;
            color: #fff;
            margin-bottom: 10px;
        }

        .edit {
            background: #f59e0b;
            color: #fff;
        }

        .delete {
            background: #ef4444;
            color: #fff;
        }

        .accept {
            background: #22c55e;
            color: #fff;
        }

        .reject {
            background: #ef4444;
            color: #fff;
        }

        .emprunter {
            background: #3b82f6;
            color: #fff;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
        }

        .warning {
            background: #fde68a;
            color: #92400e;
        }
    </style>

    <!-- LOGIN -->


    <!-- REGISTER -->


    <!-- ================= BIBLIOTHECAIRE ================= -->
    <div class="layout hidden">
        <div class="sidebar">
            <h3>📚 Bibliothécaire</h3>
            <a>Dashboard</a>
            <a>Livres</a>
            <a>Membres</a>
            <a>Déconnexion</a>
        </div>

        <div class="content">
            <div class="header">
                <a href="/dashboardb">Dashboard Manager</a>
                <span>Bienvenue, <strong>Administrateur</strong></span>
            </div>

            <!-- CARDS -->
            <div class="cards">
                <div class="card">
                    <h4>Total Livres</h4>
                    <p>3</p>
                </div>
                <div class="card">
                    <h4>Membres inscrits</h4>
                    <p>12</p>
                </div>
                <div class="card">
                    <h4>Emprunts actifs</h4>
                    <p>5</p>
                </div>
            </div>

            <!-- GESTION LIVRES -->
            <h3>Gestion des Livres</h3>
            <a href="{{ route('books.create') }}" class="btn add">Ajouter un livre</a>


            <table>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>Les Misérables</td>
                    <td>Victor Hugo</td>
                    <td>
                        <a href="update_book.php" class="btn edit">Modifier</a>
                        <a href="supprimer_book.php" class="btn delete">supprimer</a>

                    </td>
                </tr>
            </table>

            <!-- GESTION MEMBRES -->
            <h3>Gestion des Membres</h3>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>Jean Dupont</td>
                    <td>jean@example.com</td>
                    <td><span class="badge warning">En attente</span></td>
                    <td>
                        <button class="btn accept">Accepter</button>
                        <button class="btn reject">Refuser</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>


</body>


</html>