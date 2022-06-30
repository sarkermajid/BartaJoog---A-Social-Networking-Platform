<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Friends</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="mt-5" style="background-color: #212431;">
    <div class="container">
        <div class="row">
            <div class="col-lg-0"></div>
            <div class="col-lg-12" style="background-color: #161222;">
                <h3 class="text-center text-light display-5 pt-3">All Friends</h3>
                <hr class="bg-info">
                <hr class="bg-info">
                <table class="table" style="background-color: #161222;">
                    <thead>
                      <tr>
                        <th scope="col" class="text-light text-center">Sl</th>
                        <th scope="col" class="text-light text-center">Full name</th>
                        <th scope="col" class="text-light text-center">Username</th>
                        <th scope="col" class="text-light text-center">Email</th>
                        <th scope="col" class="text-light text-center">Phone</th>
                        <th scope="col" class="text-light text-center">Address</th>
                        <th scope="col" class="text-light text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-light">1</th>
                        <td class="text-light">Saleh Ahmed Khan</td>
                        <td class="text-light">sohankhan</td>
                        <td class="text-light">sohankhan@gmail.com</td>
                        <td class="text-light">01521489618</td>
                        <td class="text-light">Basabo,Dhaka-1205</td>
                        <td>
                          <a href="{{ url('/friends-profile') }}"><button class="btn btn-outline-info btn-sm">View Profile</button></a>
                          <a href=""><button class="btn btn-outline-danger btn-sm">Unfriend</button></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-light">2</th>
                        <td class="text-light">Tareq Ul Alam</td>
                        <td class="text-light">tareq</td>
                        <td class="text-light">tareq@gmail.com</td>
                        <td class="text-light">01521459617</td>
                        <td class="text-light">Basabo,Dhaka-1204</td>
                        <td>
                          <a href="{{ url('/friends-profile') }}"><button class="btn btn-outline-info btn-sm">View Profile</button></a>
                          <a href=""><button class="btn btn-outline-danger btn-sm">Unfriend</button></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-light">3</th>
                        <td class="text-light">Tanvir Ahmed</td>
                        <td class="text-light">tanvirahmed</td>
                        <td class="text-light">tanvirahmed@gmail.com</td>
                        <td class="text-light">01921489618</td>
                        <td class="text-light">Saydabad,Dhaka-1203</td>
                        <td>
                          <a href="{{ url('/friends-profile') }}"><button class="btn btn-outline-info btn-sm">View Profile</button></a>
                          <a href=""><button class="btn btn-outline-danger btn-sm">Unfriend</button></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-light">4</th>
                        <td class="text-light">Sarker Majid</td>
                        <td class="text-light">sarkermajid</td>
                        <td class="text-light">sarkermajid@gmail.com</td>
                        <td class="text-light">01521429619</td>
                        <td class="text-light">Maniknager,Dhaka-1203</td>
                        <td>
                          <a href="{{ url('/friends-profile') }}"><button class="btn btn-outline-info btn-sm">View Profile</button></a>
                          <a href=""><button class="btn btn-outline-danger btn-sm">Unfriend</button></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-lg-0"></div>
        </div>
    </div>
</body>
</html>