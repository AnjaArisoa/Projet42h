<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    
    <link rel="stylesheet" href=<?php echo base_url().'/assets/css/accueil.css'?>>
    <title>Navbar</title>
</head>
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span class="ti-unlink"></span>
            <span>easywire</span>
        </h3>
        <span class="ti-menu-alt"></span>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('Menu/')?>">
                    <span class="ti-book"></span>
                    <span>Menu</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Menu/porte')?>">
                    <span class="ti-briefcase"></span>
                    <span>Porte Monnaie</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Menu/sport1')?>">
                    <span class="ti-book"></span>
                    <span>Ajout Sport</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Menu/plat1')?>">
                    <span class="ti-briefcase"></span>
                    <span>AjoutPlat</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Menu/niveau')?>">
                    <span class="ti-briefcase"></span>
                    <span>AjoutNiveau</span>
                </a>
            </li>
        </ul>
    </div>
    <div style="background-color:black;width:230.3px;height:50px;border-radius:10px;margin-top:300px;padding-top:10px;padding-left:20px;margin-left:10px;box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);">
        <a href=<?php echo site_url('Menu/commencer')?>>
            <span class="ti-time"></span>
            <span>Commencer</span>
        </a>
    </div>
</div>
<div class="main-content">
    <header>
        <div class="search-wrapper">
            <span class="ti-search">
                <input type="search" placeholder="Rechercher">
            </span>
        </div>
        <div class="social-icons">
            <span class="ti-bell"></span>
            <span class="ti-comment"></span>
            <span><img src=<?php echo base_url().'/assets/img/oueil.png'?> alt="no img" style="height: 38px;width: 38px;background-size: cover;background-repeat: no-repeat;border-radius: 50%;"></span>
        </div>
    </header>