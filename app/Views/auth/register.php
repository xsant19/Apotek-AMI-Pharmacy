<?= $this->extend('templates/auth') ?>
<?= $this->section('content') ?>

<head>
	<title>Apotek Ami Pharmacy Login</title>
</head>
<link href="<?php echo base_url('../assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
	</symbol>
	<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
		<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
	</symbol>
	<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
		<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
	</symbol>

	<body>
		<section class="vh-100">
			<div class="login-box">
				<div class="container py-5 h-100">
					<div class="row d-flex align-items-center justify-content-center h-100">
						<div class="col-md-8 col-lg-7 col-xl-6">
							<svg class="animated" id="freepik_stories-pharmacist" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
								<g id="freepik--background-simple--inject-47" class="animable" style="transform-origin: 250.004px 255.741px;">
									<path d="M331.6,60.63S254.61,33.25,179,76.84,65.33,206.94,32.59,276.24,18.69,416,76.38,448.18s96.92-15.24,177.85-17.54,102.69,9.26,169.85-36.46S503.37,240.49,450.4,160.6,331.6,60.63,331.6,60.63Z" style="fill: rgb(1, 78, 213); transform-origin: 250.004px 255.741px;" id="elfa7uwjuj7vp" class="animable"></path>
									<g id="ely7b7lylehf">
										<path d="M331.6,60.63S254.61,33.25,179,76.84,65.33,206.94,32.59,276.24,18.69,416,76.38,448.18s96.92-15.24,177.85-17.54,102.69,9.26,169.85-36.46S503.37,240.49,450.4,160.6,331.6,60.63,331.6,60.63Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 250.004px 255.741px;" class="animable"></path>
									</g>
								</g>
								<g id="freepik--Shelf--inject-47" class="animable" style="transform-origin: 181.925px 272.625px;">
									<rect x="32.53" y="132.15" width="303.84" height="300.28" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 184.45px 282.29px;" id="elebulmm9c60h" class="animable"></rect>
									<rect x="154.12" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 163.66px 174.635px;" id="eltsev8ann2ph" class="animable"></rect>
									<rect x="154.12" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 160.31px 174.635px;" id="el7ocf1i427hn" class="animable"></rect>
									<rect x="155.51" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 160.235px 178.1px;" id="el480wm6306y4" class="animable"></rect>
									<rect x="138" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 147.54px 174.635px;" id="eluh4t3k69ol" class="animable"></rect>
									<rect x="138" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 144.19px 174.635px;" id="elh4ni4mp5a2u" class="animable"></rect>
									<rect x="139.39" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 144.115px 178.1px;" id="elx7vhpczoaq" class="animable"></rect>
									<rect x="122.71" y="153.52" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 132.25px 169.51px;" id="elucgkj5fmshd" class="animable"></rect>
									<rect x="122.71" y="153.52" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 128.9px 169.51px;" id="elr9a2rd4vdy" class="animable"></rect>
									<rect x="124.1" y="167.11" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 128.825px 174.615px;" id="el5ky6z0usq6k" class="animable"></rect>
									<rect x="106.59" y="153.52" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 116.13px 169.51px;" id="elwe54dsyor9c" class="animable"></rect>
									<rect x="106.59" y="153.52" width="12.38" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.78px 169.51px;" id="elwz75snzj77e" class="animable"></rect>
									<rect x="107.98" y="167.11" width="9.45" height="15.01" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.705px 174.615px;" id="ell2fpy4med58" class="animable"></rect>
									<rect x="92.41" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 101.95px 174.635px;" id="el4vnlfmagghd" class="animable"></rect>
									<rect x="92.41" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.6px 174.635px;" id="elhu3mc15iuk5" class="animable"></rect>
									<rect x="93.8" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.525px 178.1px;" id="elf7a9mbrwixd" class="animable"></rect>
									<rect x="76.29" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 85.83px 174.635px;" id="else05nwlkrv" class="animable"></rect>
									<rect x="76.29" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.48px 174.635px;" id="elz8a1r5gzljs" class="animable"></rect>
									<rect x="77.68" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.405px 178.1px;" id="elzubk9cjw9me" class="animable"></rect>
									<rect x="61" y="153.52" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 70.54px 169.51px;" id="elp3ewhkk4yia" class="animable"></rect>
									<rect x="61" y="153.52" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 67.19px 169.51px;" id="el44u5f9ks6z9" class="animable"></rect>
									<rect x="62.39" y="167.11" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 67.115px 174.615px;" id="ell23v6y27e2c" class="animable"></rect>
									<rect x="44.88" y="153.52" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 54.42px 169.51px;" id="el9pkrjp4427q" class="animable"></rect>
									<rect x="44.88" y="153.52" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 51.07px 169.51px;" id="elljz2bk1yyok" class="animable"></rect>
									<rect x="46.27" y="167.11" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 50.995px 174.615px;" id="el6odwywwy3cl" class="animable"></rect>
									<rect x="302.55" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 312.09px 174.635px;" id="el2b5xozyl9tz" class="animable"></rect>
									<rect x="302.55" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.74px 174.635px;" id="eleud6kddjoph" class="animable"></rect>
									<rect x="303.94" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.665px 178.1px;" id="elp1jiywgj9v" class="animable"></rect>
									<rect x="286.43" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 295.97px 174.635px;" id="elrs34h8gywdn" class="animable"></rect>
									<rect x="286.43" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 292.62px 174.635px;" id="el04u4d2rm56hv" class="animable"></rect>
									<rect x="287.82" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 292.545px 178.1px;" id="el97vat1pepbq" class="animable"></rect>
									<rect x="271.14" y="153.52" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 280.68px 169.51px;" id="elebgtp9p6jlg" class="animable"></rect>
									<rect x="271.14" y="153.52" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 277.33px 169.51px;" id="elt7omnsho76a" class="animable"></rect>
									<rect x="272.53" y="167.11" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 277.255px 174.615px;" id="el7vh7agrvdl" class="animable"></rect>
									<rect x="255.02" y="153.52" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.56px 169.51px;" id="el34bq6c51yzc" class="animable"></rect>
									<rect x="255.02" y="153.52" width="12.38" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.21px 169.51px;" id="elwj12a5uy95" class="animable"></rect>
									<rect x="256.41" y="167.11" width="9.45" height="15.01" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.135px 174.615px;" id="elr3x0kbmqfcn" class="animable"></rect>
									<rect x="240.85" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 250.39px 174.635px;" id="el8b9yegftjqt" class="animable"></rect>
									<rect x="240.85" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 247.04px 174.635px;" id="elhlgs5tw6j2" class="animable"></rect>
									<rect x="242.23" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 246.955px 178.1px;" id="elwyqsfk8gyns" class="animable"></rect>
									<rect x="224.72" y="163.77" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 234.26px 174.635px;" id="el0i7fbu8ur4zv" class="animable"></rect>
									<rect x="224.72" y="163.77" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.91px 174.635px;" id="elphbl5bo4bu" class="animable"></rect>
									<rect x="226.11" y="173" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.835px 178.1px;" id="elm23olf7tdl" class="animable"></rect>
									<rect x="209.44" y="153.52" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 218.98px 169.51px;" id="elomjcdrcn8xs" class="animable"></rect>
									<rect x="209.44" y="153.52" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 215.63px 169.51px;" id="elka5o7xc3io" class="animable"></rect>
									<rect x="210.82" y="167.11" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 215.545px 174.615px;" id="elnrfd4bvk5c" class="animable"></rect>
									<rect x="193.31" y="153.52" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 202.85px 169.51px;" id="elxg96uzfh37h" class="animable"></rect>
									<rect x="193.31" y="153.52" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 199.5px 169.51px;" id="el4qryb2fuulm" class="animable"></rect>
									<rect x="194.7" y="167.11" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 199.425px 174.615px;" id="elwj328piiav" class="animable"></rect>
									<rect x="154.12" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 163.66px 343.245px;" id="eli3yfu6ifol" class="animable"></rect>
									<rect x="154.12" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 160.31px 343.245px;" id="elepbsy1818td" class="animable"></rect>
									<rect x="155.51" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 160.235px 346.71px;" id="elyyvcjgcuybd" class="animable"></rect>
									<rect x="138" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 147.54px 343.245px;" id="eldvsmcqxxh2" class="animable"></rect>
									<rect x="138" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 144.19px 343.245px;" id="eln18krl4mzm" class="animable"></rect>
									<rect x="139.39" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 144.115px 346.71px;" id="el2cjjxy63cuj" class="animable"></rect>
									<rect x="122.71" y="322.13" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 132.25px 338.12px;" id="el9rximc808nn" class="animable"></rect>
									<rect x="122.71" y="322.13" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 128.9px 338.12px;" id="eloaplzhm4qts" class="animable"></rect>
									<rect x="124.1" y="335.71" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 128.825px 343.215px;" id="elipa2fr9331" class="animable"></rect>
									<rect x="106.59" y="322.13" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 116.13px 338.12px;" id="el5gd4fykisy5" class="animable"></rect>
									<rect x="106.59" y="322.13" width="12.38" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.78px 338.12px;" id="elkwxt19eozh" class="animable"></rect>
									<rect x="107.98" y="335.71" width="9.45" height="15.01" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.705px 343.215px;" id="el33in4xxhx5o" class="animable"></rect>
									<rect x="92.41" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 101.95px 343.245px;" id="el7q1zkyelfe" class="animable"></rect>
									<rect x="92.41" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.6px 343.245px;" id="el5819nsmih63" class="animable"></rect>
									<rect x="93.8" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.525px 346.71px;" id="elz9y3asd50o" class="animable"></rect>
									<rect x="76.29" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 85.83px 343.245px;" id="elk0zqcxb7cv" class="animable"></rect>
									<rect x="76.29" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.48px 343.245px;" id="el02xyzrokqih2" class="animable"></rect>
									<rect x="77.68" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.405px 346.71px;" id="eliwxrr43l2b" class="animable"></rect>
									<rect x="61" y="322.13" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 70.54px 338.12px;" id="elqwww4t2bj7" class="animable"></rect>
									<rect x="61" y="322.13" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 67.19px 338.12px;" id="eld7rlbi412lc" class="animable"></rect>
									<rect x="62.39" y="335.71" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 67.115px 343.215px;" id="ely0fjlnwea4e" class="animable"></rect>
									<rect x="44.88" y="322.13" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 54.42px 338.12px;" id="el1t5lyrsxqv7" class="animable"></rect>
									<rect x="44.88" y="322.13" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 51.07px 338.12px;" id="el7jm2dpx523i" class="animable"></rect>
									<rect x="46.27" y="335.71" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 50.995px 343.215px;" id="elkr001lyooyf" class="animable"></rect>
									<rect x="302.55" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 312.09px 343.245px;" id="elwt7rvn6j17j" class="animable"></rect>
									<rect x="302.55" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.74px 343.245px;" id="el515whcs96r9" class="animable"></rect>
									<rect x="303.94" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.665px 346.71px;" id="elqone3okavk" class="animable"></rect>
									<rect x="286.43" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 295.97px 343.245px;" id="ell8dpxa9auzg" class="animable"></rect>
									<rect x="286.43" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 292.62px 343.245px;" id="el7sfjxr6uio8" class="animable"></rect>
									<rect x="287.82" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 292.545px 346.71px;" id="el2imrtg938sm" class="animable"></rect>
									<rect x="271.14" y="322.13" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 280.68px 338.12px;" id="elhzb6nu9r1h" class="animable"></rect>
									<rect x="271.14" y="322.13" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 277.33px 338.12px;" id="els9grl74di6" class="animable"></rect>
									<rect x="272.53" y="335.71" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 277.255px 343.215px;" id="elg9iumol5t7q" class="animable"></rect>
									<rect x="255.02" y="322.13" width="19.08" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.56px 338.12px;" id="el6qk52ln8lwa" class="animable"></rect>
									<rect x="255.02" y="322.13" width="12.38" height="31.98" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.21px 338.12px;" id="el69wuidzo3up" class="animable"></rect>
									<rect x="256.41" y="335.71" width="9.45" height="15.01" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.135px 343.215px;" id="elkd84w4tcd3k" class="animable"></rect>
									<rect x="240.85" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 250.39px 343.245px;" id="el238fievd3l9" class="animable"></rect>
									<rect x="240.85" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 247.04px 343.245px;" id="ell7kz5o0dihj" class="animable"></rect>
									<rect x="242.23" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 246.955px 346.71px;" id="el0dagqxp2z6rh" class="animable"></rect>
									<rect x="224.72" y="332.38" width="19.08" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 234.26px 343.245px;" id="el2qwz3ehz7g6" class="animable"></rect>
									<rect x="224.72" y="332.38" width="12.38" height="21.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.91px 343.245px;" id="elqb08edfih6" class="animable"></rect>
									<rect x="226.11" y="341.61" width="9.45" height="10.2" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.835px 346.71px;" id="elem5a8ujqwz" class="animable"></rect>
									<rect x="209.44" y="322.13" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 218.98px 338.12px;" id="el32eqcfq808h" class="animable"></rect>
									<rect x="209.44" y="322.13" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 215.63px 338.12px;" id="el144tcu9r1ybj" class="animable"></rect>
									<rect x="210.82" y="335.71" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 215.545px 343.215px;" id="elso8etcqi7o" class="animable"></rect>
									<rect x="193.31" y="322.13" width="19.08" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 202.85px 338.12px;" id="eliwnnslb02uo" class="animable"></rect>
									<rect x="193.31" y="322.13" width="12.38" height="31.98" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 199.5px 338.12px;" id="elil60aq0gegq" class="animable"></rect>
									<rect x="194.7" y="335.71" width="9.45" height="15.01" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 199.425px 343.215px;" id="el2884ofwqhf8" class="animable"></rect>
									<path d="M45,217.37h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H39.6a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,45,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.205px 229.32px;" id="el5tygtsqw77i" class="animable"></path>
									<rect x="45.02" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.565px 214.035px;" id="ellbzqj9g5q5" class="animable"></rect>
									<rect x="40.99" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 46.55px 230.16px;" id="elmjb44xenhxe" class="animable"></rect>
									<path d="M65.31,217.37H71.7a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H59.89a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,65.31,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.505px 229.32px;" id="elgn55u3pz02c" class="animable"></path>
									<rect x="65.31" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.855px 214.035px;" id="elvrq8kb5akn" class="animable"></rect>
									<rect x="61.28" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 66.84px 230.16px;" id="el6pdphyy0a68" class="animable"></rect>
									<path d="M85.6,204.58H92A5.42,5.42,0,0,1,97.41,210v31.27a0,0,0,0,1,0,0H80.18a0,0,0,0,1,0,0V210A5.42,5.42,0,0,1,85.6,204.58Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 88.795px 222.925px;" id="el6rs654ri81i" class="animable"></path>
									<rect x="85.6" y="197.91" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.145px 201.245px;" id="elavizdd7lj9" class="animable"></rect>
									<rect x="81.57" y="211.81" width="11.12" height="23.9" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 87.13px 223.76px;" id="el6o3yftqvuii" class="animable"></rect>
									<path d="M105.89,217.37h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H100.47a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,105.89,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 109.085px 229.32px;" id="el1ircq4tts9rj" class="animable"></path>
									<rect x="105.89" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 109.435px 214.035px;" id="elg4dp0ygcv2m" class="animable"></rect>
									<rect x="101.86" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 107.42px 230.16px;" id="elf7o9kebs4ec" class="animable"></rect>
									<path d="M126.18,217.37h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H120.76a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,126.18,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 129.375px 229.32px;" id="elgwv4viicq2g" class="animable"></path>
									<rect x="126.18" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 129.725px 214.035px;" id="elbhsgpcjwcq" class="animable"></rect>
									<rect x="122.15" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.71px 230.16px;" id="elfa0lmng0nnp" class="animable"></rect>
									<path d="M146.48,210.7h6.39a5.42,5.42,0,0,1,5.42,5.42v25.16a0,0,0,0,1,0,0H141.05a0,0,0,0,1,0,0V216.12A5.42,5.42,0,0,1,146.48,210.7Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 149.67px 225.99px;" id="elkp720d8niq" class="animable"></path>
									<rect x="146.48" y="204.03" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 150.025px 207.365px;" id="elvappdiyev6m" class="animable"></rect>
									<rect x="142.44" y="217.92" width="11.12" height="17.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 148px 226.815px;" id="elixrjwx4uuac" class="animable"></rect>
									<path d="M200.45,217.37h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H195a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,200.45,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.63px 229.32px;" id="el9u11pu3fyc" class="animable"></path>
									<rect x="200.45" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.995px 214.035px;" id="elxs21s9jcy2" class="animable"></rect>
									<rect x="196.42" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.98px 230.16px;" id="elkjogfw1k27" class="animable"></rect>
									<path d="M220.74,217.37h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H215.32a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,220.74,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 223.935px 229.32px;" id="el488cthi08tp" class="animable"></path>
									<rect x="220.74" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 224.285px 214.035px;" id="el9cu2bmde8c5" class="animable"></rect>
									<rect x="216.71" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.27px 230.16px;" id="el2yyleli06ee" class="animable"></rect>
									<path d="M241,204.58h6.39a5.42,5.42,0,0,1,5.42,5.42v31.27a0,0,0,0,1,0,0H235.62a0,0,0,0,1,0,0V210A5.42,5.42,0,0,1,241,204.58Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.215px 222.925px;" id="el5szte57j2l" class="animable"></path>
									<rect x="241.04" y="197.91" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.585px 201.245px;" id="el5moyhxzv5wm" class="animable"></rect>
									<rect x="237.01" y="211.81" width="11.12" height="23.9" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.57px 223.76px;" id="eljoep0ba8xok" class="animable"></rect>
									<path d="M261.33,217.37h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H255.91a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,261.33,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.525px 229.32px;" id="elp7tm03xarg" class="animable"></path>
									<rect x="261.33" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.875px 214.035px;" id="elgmex6ibsmof" class="animable"></rect>
									<rect x="257.3" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 262.86px 230.16px;" id="el32f0rgx4phz" class="animable"></rect>
									<path d="M281.62,217.37H288a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H276.2a0,0,0,0,1,0,0V222.79A5.42,5.42,0,0,1,281.62,217.37Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 284.81px 229.32px;" id="elq8sizzo13y" class="animable"></path>
									<rect x="281.62" y="210.7" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 285.165px 214.035px;" id="elw61esq7qd8q" class="animable"></rect>
									<rect x="277.59" y="224.6" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 283.15px 230.16px;" id="elu1zohi5umgl" class="animable"></rect>
									<path d="M301.91,210.7h6.39a5.42,5.42,0,0,1,5.42,5.42v25.16a0,0,0,0,1,0,0H296.49a0,0,0,0,1,0,0V216.12A5.42,5.42,0,0,1,301.91,210.7Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.105px 225.99px;" id="el4glpztl3zgs" class="animable"></path>
									<rect x="301.91" y="204.03" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.455px 207.365px;" id="elbz5vd8ia83u" class="animable"></rect>
									<rect x="297.88" y="217.92" width="11.12" height="17.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 303.44px 226.815px;" id="elie5xv12vriq" class="animable"></rect>
									<path d="M45,387.42h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H39.6a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,45,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.205px 399.37px;" id="el106sgli84v9" class="animable"></path>
									<rect x="45.02" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.565px 384.085px;" id="ele7sg9vd7y5f" class="animable"></rect>
									<rect x="40.99" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 46.55px 400.2px;" id="elctkf4p55rj4" class="animable"></rect>
									<path d="M65.31,387.42H71.7a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H59.89a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,65.31,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.505px 399.37px;" id="elalcuxkbo1ko" class="animable"></path>
									<rect x="65.31" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.855px 384.085px;" id="elrdbatqjxryj" class="animable"></rect>
									<rect x="61.28" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 66.84px 400.2px;" id="eldgw1cer2ysw" class="animable"></rect>
									<path d="M85.6,374.63H92a5.42,5.42,0,0,1,5.42,5.42v31.27a0,0,0,0,1,0,0H80.18a0,0,0,0,1,0,0V380.05A5.42,5.42,0,0,1,85.6,374.63Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 88.8px 392.975px;" id="el5ao1ukr9d4f" class="animable"></path>
									<rect x="85.6" y="367.96" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 89.145px 371.295px;" id="elxtjomq3evc" class="animable"></rect>
									<rect x="81.57" y="381.86" width="11.12" height="23.9" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 87.13px 393.81px;" id="el66ezb731nd6" class="animable"></rect>
									<path d="M105.89,387.42h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H100.47a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,105.89,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 109.085px 399.37px;" id="elvyk48xx9k0g" class="animable"></path>
									<rect x="105.89" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 109.435px 384.085px;" id="elpo6yf1rgwk" class="animable"></rect>
									<rect x="101.86" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 107.42px 400.2px;" id="elsr2m458ivgn" class="animable"></rect>
									<path d="M126.18,387.42h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H120.76a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,126.18,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 129.375px 399.37px;" id="el0rmzweikloh" class="animable"></path>
									<rect x="126.18" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 129.725px 384.085px;" id="eleosrab6iiq" class="animable"></rect>
									<rect x="122.15" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.71px 400.2px;" id="elu1wadtaz21d" class="animable"></rect>
									<path d="M146.48,380.75h6.39a5.42,5.42,0,0,1,5.42,5.42v25.16a0,0,0,0,1,0,0H141.05a0,0,0,0,1,0,0V386.17A5.42,5.42,0,0,1,146.48,380.75Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 149.67px 396.04px;" id="el89a2nc29lum" class="animable"></path>
									<rect x="146.48" y="374.08" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 150.025px 377.415px;" id="el503nmarph68" class="animable"></rect>
									<rect x="142.44" y="387.97" width="11.12" height="17.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 148px 396.865px;" id="el8f3yhp9w51" class="animable"></rect>
									<path d="M200.45,387.42h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H195a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,200.45,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.63px 399.37px;" id="eld6rk163ekba" class="animable"></path>
									<rect x="200.45" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.995px 384.085px;" id="elx1l7rlgvtz" class="animable"></rect>
									<rect x="196.42" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.98px 400.2px;" id="el4ur5rdm0jkb" class="animable"></rect>
									<path d="M220.74,387.42h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H215.32a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,220.74,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 223.935px 399.37px;" id="elx6k1cf6xcrh" class="animable"></path>
									<rect x="220.74" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 224.285px 384.085px;" id="elx8hm6672yjl" class="animable"></rect>
									<rect x="216.71" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.27px 400.2px;" id="ell63w3wl4q9" class="animable"></rect>
									<path d="M241,374.63h6.39a5.42,5.42,0,0,1,5.42,5.42v31.27a0,0,0,0,1,0,0H235.62a0,0,0,0,1,0,0V380.05A5.42,5.42,0,0,1,241,374.63Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.215px 392.975px;" id="elvrexolai36e" class="animable"></path>
									<rect x="241.04" y="367.96" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.585px 371.295px;" id="elsh7cinnmy3k" class="animable"></rect>
									<rect x="237.01" y="381.86" width="11.12" height="23.9" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.57px 393.81px;" id="elj47vq2de9rb" class="animable"></rect>
									<path d="M261.33,387.42h6.39a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H255.91a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,261.33,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.525px 399.37px;" id="elwdn8shaxhr" class="animable"></path>
									<rect x="261.33" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.875px 384.085px;" id="elhy32mhv27dl" class="animable"></rect>
									<rect x="257.3" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 262.86px 400.2px;" id="eldrpveeczgb5" class="animable"></rect>
									<path d="M281.62,387.42H288a5.42,5.42,0,0,1,5.42,5.42v18.48a0,0,0,0,1,0,0H276.2a0,0,0,0,1,0,0V392.84A5.42,5.42,0,0,1,281.62,387.42Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 284.81px 399.37px;" id="elrwzas0etfx" class="animable"></path>
									<rect x="281.62" y="380.75" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 285.165px 384.085px;" id="elb1aapfg9ojn" class="animable"></rect>
									<rect x="277.59" y="394.64" width="11.12" height="11.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 283.15px 400.2px;" id="elgm4ttfd0bqw" class="animable"></rect>
									<path d="M301.91,380.75h6.39a5.42,5.42,0,0,1,5.42,5.42v25.16a0,0,0,0,1,0,0H296.49a0,0,0,0,1,0,0V386.17A5.42,5.42,0,0,1,301.91,380.75Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.105px 396.04px;" id="elr007mfmz5u" class="animable"></path>
									<rect x="301.91" y="374.08" width="7.09" height="6.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.455px 377.415px;" id="el0il1woh826sp" class="animable"></rect>
									<rect x="297.88" y="387.97" width="11.12" height="17.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 303.44px 396.865px;" id="el6xp4kw9fmt8" class="animable"></rect>
									<polygon points="56.91 263.41 41.06 263.41 45.02 297.43 52.95 297.43 56.91 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.985px 280.42px;" id="el71eqm6zsgk2" class="animable"></polygon>
									<polygon points="44.39 292.02 45.02 297.43 52.95 297.43 53.58 292.02 44.39 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.985px 294.725px;" id="elmaboawooqgo" class="animable"></polygon>
									<rect x="45.31" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.595px 278.1px;" id="el2uboiiugazt" class="animable"></rect>
									<polygon points="76.25 263.41 60.39 263.41 64.36 297.43 72.28 297.43 76.25 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.32px 280.42px;" id="elug61rixvp3" class="animable"></polygon>
									<polygon points="63.73 292.02 64.36 297.43 72.28 297.43 72.91 292.02 63.73 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.32px 294.725px;" id="el46bea9qufv5" class="animable"></polygon>
									<rect x="64.65" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 67.935px 278.1px;" id="elm1xckp4plps" class="animable"></rect>
									<polygon points="95.58 263.41 79.72 263.41 83.69 297.43 91.61 297.43 95.58 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 87.65px 280.42px;" id="el6055h5w32hi" class="animable"></polygon>
									<polygon points="83.06 292.02 83.69 297.43 91.61 297.43 92.25 292.02 83.06 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 87.655px 294.725px;" id="elmihwqt7en4h" class="animable"></polygon>
									<rect x="83.98" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 87.265px 278.1px;" id="elyvjwkeq2j1" class="animable"></rect>
									<polygon points="114.91 263.41 99.06 263.41 103.02 297.43 110.95 297.43 114.91 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 106.985px 280.42px;" id="eloc8dt0h9ru" class="animable"></polygon>
									<polygon points="102.39 292.02 103.02 297.43 110.95 297.43 111.58 292.02 102.39 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 106.985px 294.725px;" id="ellh26d55ptje" class="animable"></polygon>
									<rect x="103.31" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 106.595px 278.1px;" id="elnesrnpyik49" class="animable"></rect>
									<rect x="119.58" y="279.26" width="16.76" height="5.8" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.96px 282.16px;" id="el3nufr1blgwo" class="animable"></rect>
									<rect x="117.04" y="285.06" width="21.85" height="12.76" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.965px 291.44px;" id="elgci7e40kj3g" class="animable"></rect>
									<rect x="120.1" y="287.77" width="15.71" height="7.35" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.955px 291.445px;" id="eli1giio3heqp" class="animable"></rect>
									<rect x="144.33" y="279.26" width="16.76" height="5.8" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 152.71px 282.16px;" id="elvrau0fzmmp" class="animable"></rect>
									<rect x="141.78" y="285.06" width="21.85" height="12.76" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 152.705px 291.44px;" id="el4hjofp6omt6" class="animable"></rect>
									<rect x="144.85" y="287.77" width="15.71" height="7.35" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 152.705px 291.445px;" id="el24gnr81iuuh" class="animable"></rect>
									<polygon points="211.57 263.41 195.72 263.41 199.68 297.43 207.61 297.43 211.57 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.645px 280.42px;" id="el4pg4bpn20zv" class="animable"></polygon>
									<polygon points="199.05 292.02 199.68 297.43 207.61 297.43 208.24 292.02 199.05 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.645px 294.725px;" id="el06lfvlnftug5" class="animable"></polygon>
									<rect x="199.97" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.255px 278.1px;" id="elbz05i3ef4hm" class="animable"></rect>
									<polygon points="230.91 263.41 215.05 263.41 219.02 297.43 226.94 297.43 230.91 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.98px 280.42px;" id="elglpv4n6isqh" class="animable"></polygon>
									<polygon points="218.39 292.02 219.02 297.43 226.94 297.43 227.57 292.02 218.39 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.98px 294.725px;" id="el1r16dg6kscd" class="animable"></polygon>
									<rect x="219.31" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.595px 278.1px;" id="eltvkgbokmwnb" class="animable"></rect>
									<polygon points="250.24 263.41 234.39 263.41 238.35 297.43 246.28 297.43 250.24 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.315px 280.42px;" id="elrbpzcri1y2s" class="animable"></polygon>
									<polygon points="237.72 292.02 238.35 297.43 246.28 297.43 246.91 292.02 237.72 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.315px 294.725px;" id="el6rau2if4985" class="animable"></polygon>
									<rect x="238.64" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.925px 278.1px;" id="el7zufwrrrlsm" class="animable"></rect>
									<polygon points="269.57 263.41 253.72 263.41 257.68 297.43 265.61 297.43 269.57 263.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.645px 280.42px;" id="elxh5ll97klp7" class="animable"></polygon>
									<polygon points="257.05 292.02 257.68 297.43 265.61 297.43 266.24 292.02 257.05 292.02" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.645px 294.725px;" id="elsdwwzh5j3cg" class="animable"></polygon>
									<rect x="257.97" y="269.98" width="6.57" height="16.24" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.255px 278.1px;" id="eljjs89y4axzt" class="animable"></rect>
									<rect x="274.24" y="279.26" width="16.76" height="5.8" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 282.62px 282.16px;" id="eldtvldxuxkm" class="animable"></rect>
									<rect x="271.7" y="285.06" width="21.85" height="12.76" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 282.625px 291.44px;" id="elg5xac59rvff" class="animable"></rect>
									<rect x="274.77" y="287.77" width="15.71" height="7.35" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 282.625px 291.445px;" id="elckm99gcsdc" class="animable"></rect>
									<rect x="298.99" y="279.26" width="16.76" height="5.8" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 307.37px 282.16px;" id="elrcza5lcrl6" class="animable"></rect>
									<rect x="296.44" y="285.06" width="21.85" height="12.76" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 307.365px 291.44px;" id="elgwu04klqmvm" class="animable"></rect>
									<rect x="299.51" y="287.77" width="15.71" height="7.35" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 307.365px 291.445px;" id="elzic5my3sded" class="animable"></rect>
									<g id="elgl1tbav7uts">
										<rect x="181.56" y="37.03" width="7.24" height="301.82" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.18px 187.94px; transform: rotate(90deg);" class="animable"></rect>
									</g>
									<g id="el3n5o89nlrd4">
										<rect x="181.56" y="93.48" width="7.24" height="301.82" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.18px 244.39px; transform: rotate(90deg);" class="animable"></rect>
									</g>
									<g id="el203s2ora35pi">
										<rect x="181.56" y="149.94" width="7.24" height="301.82" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.18px 300.85px; transform: rotate(90deg);" class="animable"></rect>
									</g>
									<g id="elyovoartuko">
										<rect x="181.56" y="206.4" width="7.24" height="301.82" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.18px 357.31px; transform: rotate(90deg);" class="animable"></rect>
									</g>
									<g id="eljbc8abn2zp">
										<rect x="181.56" y="262.25" width="7.24" height="301.82" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.18px 413.16px; transform: rotate(90deg);" class="animable"></rect>
									</g>
									<rect x="28.48" y="141.62" width="7.24" height="292.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 32.1px 287.825px;" id="el5tjwrzd3zp8" class="animable"></rect>
									<rect x="180.48" y="141.62" width="7.24" height="292.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 184.1px 287.825px;" id="elnzaf3pkd8w" class="animable"></rect>
									<rect x="332.48" y="141.62" width="7.24" height="292.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 336.1px 287.825px;" id="elirqryixaw0q" class="animable"></rect>
									<rect x="21.24" y="111.22" width="321.37" height="31.12" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 181.925px 126.78px;" id="ells1gsnrw5f" class="animable"></rect>
									<rect x="115.34" y="111.22" width="133.18" height="31.12" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 181.93px 126.78px;" id="eldsskh41dala" class="animable"></rect>
									<polygon points="77.45 123.14 70.72 123.14 70.72 116.4 63.78 116.4 63.78 123.14 57.04 123.14 57.04 130.08 63.78 130.08 63.78 136.81 70.72 136.81 70.72 130.08 77.45 130.08 77.45 123.14" style="fill: rgb(255, 255, 255); transform-origin: 67.245px 126.605px;" id="elcn5nn3yyzbl" class="animable"></polygon>
									<polygon points="304.83 123.14 298.1 123.14 298.1 116.4 291.16 116.4 291.16 123.14 284.42 123.14 284.42 130.08 291.16 130.08 291.16 136.81 298.1 136.81 298.1 130.08 304.83 130.08 304.83 123.14" style="fill: rgb(255, 255, 255); transform-origin: 294.625px 126.605px;" id="elgumpdzv80va" class="animable"></polygon>
									<path d="M136.18,116c3.44,0,4.91,2,4.91,5.35V124c0,3.47-1.62,5.28-5.1,5.28h-2.15v8.64H131.4V116ZM136,127.07c1.82,0,2.69-.84,2.69-2.94v-2.91c0-2-.72-3-2.5-3h-2.34v8.85Z" style="fill: rgb(1, 78, 213); transform-origin: 136.245px 126.96px;" id="elvi1btcb7ca" class="animable"></path>
									<path d="M145.54,128v9.86H143.1V116h2.44v9.85h5.38V116h2.44v21.9h-2.44V128Z" style="fill: rgb(1, 78, 213); transform-origin: 148.23px 126.95px;" id="el8y1jvcuski9" class="animable"></path>
									<path d="M158.33,133.49l-.84,4.41h-2.25l4.19-21.9H163l4.19,21.9h-2.44l-.84-4.41Zm.32-2.1h4.88l-2.48-12.64Z" style="fill: rgb(1, 78, 213); transform-origin: 161.215px 126.95px;" id="el5lnachmdv28" class="animable"></path>
									<path d="M173.94,116c3.45,0,4.88,1.75,4.88,5v1.79c0,2.41-.84,3.91-2.72,4.5,2,.6,2.76,2.22,2.76,4.57v3.41a5.57,5.57,0,0,0,.43,2.63h-2.47a5.8,5.8,0,0,1-.4-2.66V131.8c0-2.47-1.16-3.26-3.19-3.26H171.5v9.36h-2.43V116Zm-.62,10.32c1.94,0,3.1-.62,3.1-3v-2.1c0-2-.72-3-2.54-3H171.5v8.1Z" style="fill: rgb(1, 78, 213); transform-origin: 174.18px 126.95px;" id="elzx6s2jo9wu" class="animable"></path>
									<path d="M189.46,137.87h-2.34l-3.63-17.43V137.9h-2.13V116h3.41l3.6,17.49L191.84,116h3.41v21.9h-2.31V120.29Z" style="fill: rgb(1, 78, 213); transform-origin: 188.305px 126.95px;" id="el9ftn1u04474" class="animable"></path>
									<path d="M200.23,133.49l-.85,4.41h-2.25l4.19-21.9h3.54l4.19,21.9h-2.44l-.85-4.41Zm.31-2.1h4.88L203,118.75Z" style="fill: rgb(1, 78, 213); transform-origin: 203.09px 126.95px;" id="elkcpj21orh7" class="animable"></path>
									<path d="M220.62,121.29v2h-2.31v-2.1c0-2-.78-3.16-2.57-3.16s-2.56,1.19-2.56,3.16v11.58c0,2,.81,3.15,2.56,3.15s2.57-1.18,2.57-3.15v-2.85h2.31v2.72c0,3.32-1.56,5.51-4.94,5.51s-4.91-2.19-4.91-5.51V121.29c0-3.32,1.56-5.51,4.91-5.51S220.62,118,220.62,121.29Z" style="fill: rgb(1, 78, 213); transform-origin: 215.695px 126.965px;" id="elj6vr5j7urgs" class="animable"></path>
									<path d="M226.38,130l-4.63-14h2.54l3.41,10.76L231.14,116h2.31l-4.66,14v7.86h-2.41Z" style="fill: rgb(1, 78, 213); transform-origin: 227.6px 126.93px;" id="elxioq8okh73j" class="animable"></path>
								</g>
								<g id="freepik--Poster--inject-47" class="animable" style="transform-origin: 411.295px 217.37px;">
									<rect x="358.31" y="138.33" width="105.97" height="158.08" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.295px 217.37px;" id="el19x6m16ln25" class="animable"></rect>
									<path d="M426.35,178.52l-36.19,22.39a16.5,16.5,0,0,1-22.72-5.35h0a16.5,16.5,0,0,1,5.35-22.71L409,150.45a16.51,16.51,0,0,1,22.72,5.35h0A16.5,16.5,0,0,1,426.35,178.52Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 399.579px 175.682px;" id="eladza6z1rjve" class="animable"></path>
									<path d="M409,150.45l-18.46,11.43,17.37,28.06,18.46-11.42A16.5,16.5,0,1,0,409,150.45Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 412.365px 168.96px;" id="elsr16g2y3i" class="animable"></path>
									<path d="M436.84,247.77l-40.2-14a16.49,16.49,0,0,1-10.17-21h0a16.49,16.49,0,0,1,21-10.17l40.2,14a16.5,16.5,0,0,1,10.17,21h0A16.5,16.5,0,0,1,436.84,247.77Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 422.154px 225.184px;" id="ellrhm2mo3wz" class="animable"></path>
									<path d="M447.67,216.59l-20.51-7.13-10.83,31.18,20.51,7.13a16.5,16.5,0,0,0,10.83-31.18Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 437.544px 229.072px;" id="el304cwb3kx7y" class="animable"></path>
									<line x1="442.67" y1="261.67" x2="447.78" y2="261.67" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 445.225px 261.67px;" id="el14y8f87vq66" class="animable"></line>
									<line x1="373.95" y1="261.67" x2="437.03" y2="261.67" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 405.49px 261.67px;" id="elt11d4jz6kad" class="animable"></line>
									<line x1="373.95" y1="272.96" x2="447.78" y2="272.96" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 410.865px 272.96px;" id="el9mc9cv8pllt" class="animable"></line>
									<line x1="386.57" y1="284.26" x2="447.78" y2="284.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 417.175px 284.26px;" id="el2umwjspg3ls" class="animable"></line>
									<line x1="373.95" y1="284.26" x2="379.16" y2="284.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 376.555px 284.26px;" id="elumzcrnb1hhg" class="animable"></line>
									<line x1="419.38" y1="246.91" x2="424.33" y2="246.91" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 421.855px 246.91px;" id="el48wrh80054t" class="animable"></line>
									<polyline points="371.34 208.69 371.34 246.91 413.03 246.91" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 392.185px 227.8px;" id="elwscpsiyat7a" class="animable"></polyline>
									<line x1="441.26" y1="151.74" x2="436.49" y2="151.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 438.875px 151.74px;" id="el236faa6thai" class="animable"></line>
									<polyline points="452.99 213.03 452.99 151.74 446.9 151.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 449.945px 182.385px;" id="el39j4dx8b9es" class="animable"></polyline>
									<polyline points="398.27 151.36 370.47 151.36 370.47 169.6" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 384.37px 160.48px;" id="elnmh0pigb3f" class="animable"></polyline>
								</g>
								<g id="freepik--Character--inject-47" class="animable" style="transform-origin: 300.986px 320.424px;">
									<path d="M295.4,273.88c-3.9,4.3-18.31,4.91-30.95,4.86s-28.7-7.19-34.07-14.86,5.47-23.32,7.37-26.95,2.66-21.46,13.55-26.69,33.82-2.51,41.27,3,23.15,15.14,25.71,24.67-6.37,9.64-7.13,10.1-2,.91-3.92,4.55a7.17,7.17,0,0,1-5.86,3.71Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.82px 243.09px;" id="el5u604jx9x3o" class="animable"></path>
									<path d="M307.17,235c7.24,1.91,12,4.24,8.39,6.78" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 311.982px 238.39px;" id="elbpdzbtco3rf" class="animable"></path>
									<path d="M278,230s14.28,1.57,25.53,4.08" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 290.765px 232.04px;" id="elz3b6pwptcf8" class="animable"></path>
									<path d="M271.84,227.66s18.33-6.11,35.73,1.41" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 289.705px 227.194px;" id="elw7601qafovg" class="animable"></path>
									<path d="M293.15,219.27a20.63,20.63,0,0,1,2.66.87" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 294.48px 219.705px;" id="el0t06tf254e6" class="animable"></path>
									<path d="M265.26,225.78s11.07-7.59,22.83-7.21" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.675px 222.168px;" id="elq1wrmzu3x8" class="animable"></path>
									<path d="M236.9,262.44a18,18,0,0,1-4.07.94" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 234.865px 262.91px;" id="eldpfx1uqnit" class="animable"></path>
									<path d="M270,235.65s-13.16,13.16-21.62,20.21a37.8,37.8,0,0,1-8.05,5.21" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 255.165px 248.36px;" id="el9m3lmjtbkvu" class="animable"></path>
									<path d="M261.5,232.83S247.87,248.34,235.65,253" style="fill: none; stroke: rgb(84, 84, 84); stroke-linecap: round; stroke-linejoin: round; transform-origin: 248.575px 242.915px;" id="eld8kr4dgaov" class="animable"></path>
									<path d="M387,413.52s4.71,4.25,5.33,5.46,2.93,6.37,2.08,6.5-2.9-3.16-3.51-4.54-3-5-3-5Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 390.798px 419.502px;" id="el92udmlv6g9p" class="animable"></path>
									<path d="M384.05,410.53s3.25,3,3.87,4.21,3.52,12.13,3.52,12.13-1.4,1.12-2.38.58-4.41-11.33-4.41-11.33Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 387.745px 419.064px;" id="ellc9cal491qc" class="animable"></path>
									<path d="M376.66,405.82s5.94,3.13,7.39,4.71,3.75,14.67,4.21,15.87-2.29,2.09-2.94,1.56S382,416,382,416l-5.36-8.66Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 382.476px 416.968px;" id="el0941oqy155nm" class="animable"></path>
									<path d="M362.56,404.37l11.24.22a6.21,6.21,0,0,1,4.89,2.56l4.72,6.56.81,13.05A1.19,1.19,0,0,1,383,428h0a1.22,1.22,0,0,1-1.1-.88l-3.27-11.8-4.29-2s-6.57,3.6-6.43,4.28,3.82,5.23,4.62,6.27,2.75,2.82,2.2,3.81-3.88,0-5-.73-7.23-8.41-9.52-10-4.75-3.25-4.75-3.25Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 369.841px 416.233px;" id="el34txffz8s2u" class="animable"></path>
									<polyline points="360.55 407.39 359.02 415.84 356.46 413.79 360.55 407.39" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 358.505px 411.615px;" id="el8znwc8wk8pv" class="animable"></polyline>
									<path d="M312,298.09s10.11,2.7,11.53,9.3S331.2,379,331.2,379l33.5,21.77-10.14,15.65-31.81-6.25L304.12,296Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 334.41px 356.21px;" id="elpfw9wxo1we" class="animable"></path>
									<path d="M331.2,379s-4.43,2.34-6,4.44" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 328.2px 381.22px;" id="elwu8pldbwzm" class="animable"></path>
									<path d="M317.5,313.27l8.94,120.14-112.91-4.6s3.18-124.12,4.54-126.78,12.32-3.93,21.37-6.77S264.63,287,264.63,287l21.24.9c5.94.26,30.49,11.73,30.45,12.72" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 269.985px 360.205px;" id="el7m2bowl44ys" class="animable"></path>
									<rect x="307.32" y="336.98" width="11.21" height="4.34" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 312.925px 339.15px;" id="ellh88wms8ml" class="animable"></rect>
									<polyline points="252.72 291.87 253.78 336.3 266.54 339.33 259.35 350.67 277.28 400.54" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 265px 346.205px;" id="eld2611o5acpr" class="animable"></polyline>
									<path d="M290.77,289.3s11.83,24.56,15.2,32.64,4.75,10.62,4.75,10.62l-8.44,5.84,8.63,6.82-8.07,43.28" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 300.84px 338.9px;" id="el8q6du5ik93j" class="animable"></path>
									<path d="M257,290s17.1,45.91,18.45,60.59,4.65,81.78,4.65,81.78l22,1s-.82-67-4.2-91.92-8.19-45.73-9.07-48.24a24.55,24.55,0,0,0-3-5.34l-13.58-2Z" style="fill: rgb(1, 78, 213); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 279.55px 359.62px;" id="eljfvkm19j4tf" class="animable"></path>
									<line x1="298.96" y1="365.08" x2="290.57" y2="382.4" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 294.765px 373.74px;" id="elqmvzn41twl9" class="animable"></line>
									<line x1="295.81" y1="365.08" x2="283.75" y2="390.27" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 289.78px 377.675px;" id="elhgyam7fqfqq" class="animable"></line>
									<path d="M264.1,269.55s.07,15.63-.25,17.35-5.33,1.1-5.43,3.33,7.5,23.29,14.9,29.81,9.68,5.62,11.88.51,2.85-15.15,3-18.37c.06-1.43.36-5,0-6.74-.52-2.45-1.18-5.95-3.25-7.37l-.79-.54.33-7.67S271.88,278.82,264.1,269.55Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.397px 297.104px;" id="ellaabkj1qyg" class="animable"></path>
									<path d="M284.15,287.53l.33-7.67s-12.6-1-20.38-10.31v.1l.52,2.4s4.9,14.41,20.32,16Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 274.52px 278.8px;" id="elr26p11int8" class="animable"></path>
									<path d="M276.16,231.64s-14-4.32-14.61-6.33.06-6.94-1.72-6-1.54,6.87.86,8.71,15.68,4.4,16.59,6.42-.4,3.45-4.87,9.21S248.49,258,248.4,260s2.13,8,5.59,8.42a10.33,10.33,0,0,0,6.26-1.46,30.21,30.21,0,0,0,10.42,11.36c7,4.27,17.1,5.94,23.23,1.75,3.35-2.3,9.26-13.49,9.71-18.18s-2.05-10-2-12,.19-4.45.19-4.45-17.43-9.68-19.82-11.77A9.58,9.58,0,0,0,276.16,231.64Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.031px 250.843px;" id="elljdzkgrf8iq" class="animable"></path>
									<path d="M273.16,245.4s5-3.2,10-.69" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 278.16px 244.574px;" id="elrw02avmwk1n" class="animable"></path>
									<path d="M292.81,244.94S296,243.34,299,247" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 295.905px 245.796px;" id="elfnwpiob2nll" class="animable"></path>
									<path d="M290.08,253.57s-.39,3.45.56,4.24,2.92,1.36,1.87,2.81-4.29,1.55-5.7-.25" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 289.81px 257.642px;" id="elqny6019q2g8" class="animable"></path>
									<path d="M294.26,265.9s-4.09,2.8-10.67.28" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 288.925px 266.566px;" id="elu0uuxbggclc" class="animable"></path>
									<path d="M279.51,252.94c-.06,1.37-.89,2.45-1.84,2.4s-1.69-1.18-1.63-2.55.88-2.44,1.84-2.4S279.57,251.58,279.51,252.94Z" style="fill: rgb(38, 50, 56); transform-origin: 277.775px 252.865px;" id="elb80266p5h2b" class="animable"></path>
									<path d="M297.08,253.7c-.06,1.37-.89,2.45-1.84,2.4s-1.69-1.18-1.63-2.55.89-2.44,1.84-2.4S297.14,252.34,297.08,253.7Z" style="fill: rgb(38, 50, 56); transform-origin: 295.345px 253.625px;" id="el9pykbka4xvu" class="animable"></path>
									<g id="el4zn9mk2iymd">
										<rect x="269.33" y="247.1" width="17.34" height="9.91" rx="2.62" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 278px 252.055px; transform: rotate(2.48deg);" class="animable"></rect>
									</g>
									<g id="el14s0oy4ycpm">
										<rect x="289.87" y="247.94" width="14.86" height="9.91" rx="2.62" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 297.3px 252.895px; transform: rotate(2.48deg);" class="animable"></rect>
									</g>
									<line x1="286.82" y1="248.72" x2="289.79" y2="248.85" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 288.305px 248.785px;" id="eldjpecntcuan" class="animable"></line>
									<line x1="269.36" y1="251.19" x2="262.43" y2="250.89" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 265.895px 251.04px;" id="elq7g3tszqlsp" class="animable"></line>
									<path d="M275.09,398.49s7.27-.32,9.85-1.47,20.76-6,21.69-5.69a70.27,70.27,0,0,1,9,4.49c1.47,1.08,4.63,9.69,5.83,13.1a1.56,1.56,0,0,1-.84,2h0a1.58,1.58,0,0,1-2-.59L316,406.13l1.89,7.86a1.67,1.67,0,0,1-1.11,2h0a1.68,1.68,0,0,1-1.82-.53l-6.16-7.61-3-3,6.3,11.7a1.54,1.54,0,0,1-1.09,2.24h0a1.55,1.55,0,0,1-1.33-.41c-1.81-1.76-7.41-7.21-7.9-8a25.76,25.76,0,0,0-3.33-3.29l6.12,11.62h0a1.36,1.36,0,0,1-.52,2l-.09,0c-2.08.08-3.13-1.4-4.62-2.86l-6.44-6.3s-9.87,2.09-12.68,1.34-9.22-5.76-9.22-5.76Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 296.283px 406.014px;" id="elobwk86toc5n" class="animable"></path>
									<polygon points="275.09 398.49 274.81 409.69 270.93 407.14 275.09 398.49" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.01px 404.09px;" id="el64bm3krwafr" class="animable"></polygon>
									<polyline points="315.96 406.13 313.75 401.66 305.95 395.96" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 310.955px 401.045px;" id="elzjsbso3hmxh" class="animable"></polyline>
									<line x1="305.73" y1="404.86" x2="302.19" y2="401.16" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 303.96px 403.01px;" id="elfocsof37xml" class="animable"></line>
									<path d="M228.59,299.31s-9.76-.42-12.44,3.25-8.92,90.95-8.77,94.74,60.31,19.16,60.31,19.16l8.69-18.55-35.93-21.26,2.09-49.6" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.879px 357.878px;" id="els3kvx65vyhs" class="animable"></path>
									<path d="M224.46,377.15s9.42-4.68,16-.5" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 232.46px 376.032px;" id="ele29ody2r69q" class="animable"></path>
									<path d="M228.18,380.1a19.29,19.29,0,0,1,9.8-2.78" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 233.08px 378.71px;" id="elk93js8v7gud" class="animable"></path>
									<path d="M223.49,384.73a8.34,8.34,0,0,1,.75-1.11" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 223.865px 384.175px;" id="elj4cko4prcj" class="animable"></path>
								</g>
								<g id="freepik--Plant--inject-47" class="animable" style="transform-origin: 464.122px 391.733px;">
									<path d="M457.6,402.48s-4.47-5.68-4.47-9.13,3.45,1.63,3.45,1.63-7.3-13.39-6.69-18.87,6.08,9.54,6.08,9.54-1.82-30.83,1.22-29.82,6.9,30,6.9,31.85,2.63-12.78,4.66-8.52,2,14.4,2,14.4,2.64-15.42,4.67-10.14S473,402.68,473,402.68" style="fill: rgb(1, 78, 213); transform-origin: 462.902px 379.243px;" id="elizc6d97oa6b" class="animable"></path>
									<rect x="453.4" y="407.17" width="24.69" height="20.49" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 465.745px 417.415px;" id="el011h4evlp3tbh" class="animable"></rect>
									<path d="M478.29,414.27V402.62h-25V416a3,3,0,0,0,3,3h.16a3,3,0,0,0,3-3v-1.69h.16V416a3,3,0,0,0,3,3h.16a3,3,0,0,0,3-3v-1.69h.16V416a3,3,0,0,0,3,3h.15a3,3,0,0,0,3-3v-1.69h.16V416a3,3,0,0,0,3,3h.15a3,3,0,0,0,3-3v-1.69Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 465.84px 410.81px;" id="elimeg5a6k9em" class="animable"></path>
								</g>
								<g id="freepik--device-2--inject-47" class="animable" style="transform-origin: 172.625px 415.162px;">
									<polygon points="178.21 412.37 178.21 403.76 159.39 403.76 159.39 412.05 178.21 412.37" style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 168.8px 408.065px;" id="elyr5n53gtvl" class="animable"></polygon>
									<path d="M159.39,403.76l-1.91-4.47a37.84,37.84,0,0,1,11.16.64,27,27,0,0,1,9.57,3.83Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 167.845px 401.447px;" id="el76n7bgl4swg" class="animable"></path>
									<path d="M157.48,399.29s-6.38.32-9.89,4.79a20.26,20.26,0,0,0-3.83,10.2l15.63-2.23v-8.29Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 151.575px 406.785px;" id="elv254fu1euxd" class="animable"></path>
									<path d="M154.29,406.63V413l-4.79.32a9.87,9.87,0,0,1,1-5.11A3.06,3.06,0,0,1,154.29,406.63Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 151.882px 409.887px;" id="el417ogajgxav" class="animable"></path>
									<polygon points="158.75 431.19 148.87 431.19 142.49 420.02 154.93 416.84 158.75 431.19" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 150.62px 424.015px;" id="elcukuopmf9x" class="animable"></polygon>
									<polygon points="201.81 419.07 195.43 431.19 158.75 431.19 153.33 420.66 201.81 419.07" style="fill: rgb(166, 166, 166); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 177.57px 425.13px;" id="eln52y47uu7kj" class="animable"></polygon>
									<g id="elr7qwc300l4f">
										<rect x="153.33" y="411.73" width="50.39" height="8.93" style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 178.525px 416.195px; transform: rotate(180deg);" class="animable"></rect>
									</g>
									<polygon points="153.33 411.73 141.53 415.88 141.53 421.3 153.33 420.66 153.33 411.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 147.43px 416.515px;" id="elolhwdqucf0h" class="animable"></polygon>
								</g>
								<g id="freepik--device-1--inject-47" class="animable" style="transform-origin: 367.28px 377.545px;">
									<polygon points="284.12 425.37 348.71 424.39 355.33 423.31 422.69 423.31 420.48 427.85 282.46 427.85 284.12 425.37" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 352.575px 425.58px;" id="elm1fxdym7udd" class="animable"></polygon>
									<polygon points="436.79 408.47 353.97 408.47 365.58 325.16 448.39 325.16 436.79 408.47" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 401.18px 366.815px;" id="eltnj97z29hvj" class="animable"></polygon>
									<polygon points="440.49 408.47 357.67 408.47 369.28 325.16 452.1 325.16 440.49 408.47" style="fill: rgb(61, 61, 61); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 404.885px 366.815px;" id="elig4oqkwtpu" class="animable"></polygon>
									<polygon points="415.68 382.5 389.71 382.5 394.08 351.14 420.05 351.14 415.68 382.5" style="fill: rgb(61, 61, 61); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 404.88px 366.82px;" id="el8wb8an27833" class="animable"></polygon>
									<polygon points="394.08 351.14 369.28 325.16 452.1 325.16 420.05 351.14 394.08 351.14" style="fill: rgb(89, 89, 89); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 410.69px 338.15px;" id="elvfyrpd92uj" class="animable"></polygon>
									<polygon points="389.71 382.5 359.51 408.2 440.49 408.47 415.68 382.5 389.71 382.5" style="fill: rgb(46, 46, 46); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 400px 395.485px;" id="elhvck4jgq4l" class="animable"></polygon>
									<circle cx="408.19" cy="372.67" r="15.54" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 408.19px 372.67px;" id="elxeafok26u1d" class="animable"></circle>
									<path d="M409.61,364.79h1a10.14,10.14,0,0,1,10.14,10.14v55a0,0,0,0,1,0,0H399.47a0,0,0,0,1,0,0v-55A10.14,10.14,0,0,1,409.61,364.79Z" style="fill: rgb(89, 89, 89); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 410.11px 397.36px;" id="elyf7b9b6cjuj" class="animable"></path>
									<path d="M420.75,429.92V375.43a9,9,0,1,0-17.88,2.13v52.36Z" style="fill: rgb(89, 89, 89); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.778px 398.706px;" id="elcu8jpue5k77" class="animable"></path>
									<rect x="410.53" y="402.67" width="5.53" height="14.05" rx="2.64" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 413.295px 409.695px;" id="el2gx6bsno7u" class="animable"></rect>
									<rect x="382.01" y="424.81" width="39.16" height="5.11" style="fill: rgb(89, 89, 89); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 401.59px 427.365px;" id="el0lh9nq5tak5q" class="animable"></rect>
								</g>
								<g id="freepik--Table--inject-47" class="animable" style="transform-origin: 254.1px 432.26px;">
									<rect x="19.85" y="427.79" width="468.5" height="8.94" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.1px 432.26px;" id="elwkgv7wu4c" class="animable"></rect>
								</g>
								<defs>
									<filter id="active" height="200%">
										<feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
										<feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
										<feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
										<feMerge>
											<feMergeNode in="OUTLINE"></feMergeNode>
											<feMergeNode in="SourceGraphic"></feMergeNode>
										</feMerge>
									</filter>
									<filter id="hover" height="200%">
										<feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
										<feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
										<feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
										<feMerge>
											<feMergeNode in="OUTLINE"></feMergeNode>
											<feMergeNode in="SourceGraphic"></feMergeNode>
										</feMerge>
										<feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
									</filter>
								</defs>
							</svg>
							<script type='text/javascript'>
								document.addEventListener('DOMContentLoaded', function() {
									window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000);
								})
							</script>
						</div>
						<div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
							<h2 class="mb-5" style="color:#014ed5">Apotek Ami Pharmacy Register</h2>
							<!-- /.login-logo -->
							<?php if (session()->getFlashdata('pesan')) : ?>
								<div class="alert alert-success" role="alert">
									<?= session()->getFlashdata('pesan'); ?>
								</div>
							<?php elseif (session()->getFlashdata('kesalahan')) : ?>
								<div class="alert alert-danger" role="alert">
									<?= session()->getFlashdata('kesalahan'); ?>
								</div>
							<?php elseif (session()->has('logout')) : ?>
								<div class="alert alert-success" role="alert">
									<?= session()->get('logout'); ?>
								</div>
							<?php endif; ?>
							<form action="/registered" method="post">
								<div class="form-outline mb-4">
									<label class="form-label" for="form1Example13">Username</label>
									<input type="text" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : '' ?>" name="username" value="<?= old('username') ? old('username') : '' ?>">
									<div class="invalid-feedback">
										<?= $validation->getError('username'); ?>
									</div>
								</div>
								<div class="form-outline mb-4">
									<label class="form-label" for="form1Example13">Password</label>
									<input type="password" class="form-control <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" name="password">
									<div class="invalid-feedback">
										<?= $validation->getError('password'); ?>
									</div>
								</div>
								<div class="form-outline mb-4">
									<label class="form-label" for="form1Example13">Konfirmasi Password</label>
									<input type="password" class="form-control <?= $validation->hasError('password1') ? 'is-invalid' : '' ?>" name="password1">
									<div class="invalid-feedback">
										<?= $validation->getError('password1'); ?>
									</div>
								</div>
								<div class="d-flex justify-content-around align-items-center mb-4">
									<!-- Checkbox -->
									<p class="mb-0 mt-2">
										<a href="/login" class="text-center">Login Account</a>
									</p>
								</div>
								<!-- /.col -->
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary btn-md btn-block">Register</button>
								</div>
								<!-- /.col -->
							</form>
						</div>
						<!-- /.form-box -->
					</div><!-- /.card -->
				</div>
				<!-- /.login-box -->
				<?= $this->endSection() ?>