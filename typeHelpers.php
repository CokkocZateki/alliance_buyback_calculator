<?php

function getTypeId($typeName){
    switch ($typeName){
        case "Tritanium":
            return 34;
        case "Mexallon":
            return 36;
        case "Nocxium":
            return 38;
        case "Megacyte":
            return 40;
        case "Pyerite":
            return 35;
        case "Isogen":
            return 37;
        case "Zydrine":
            return 39;
        case "Morphite":
            return 11399;
        case "Veldspar":
            return 37;
        case "Concentrated Veldspar":
            return 17470;
        case "Dense Veldspar":
            return 17471;
        case "Scordite":
            return 1228;
        case "Condensed Scordite":
            return 17463;
        case "Massive Scordite":
            return 17464;
        case "Pyroxeres":
            return 1224;
        case "Solid Pyroxeres":
            return 17459;
        case "Viscous Pyroxeres":
            return 17459;
        case "Plagioclase":
            return 18;
        case "Azure Plagioclase":
            return 17455;
        case "Rich Plagioclase":
            return 17456;
        case "Kernite":
            return 20;
        case "Luminous Kernite":
            return 17452;
        case "Fiery Kernite":
            return 17453;
        case "Jaspet":
            return 1226;
        case "Pure Jaspet":
            return 17448;
        case "Pristine Jaspet":
            return 17449;
        case "Hemorphite":
            return 1231;
        case "Vivid Hemorphite":
            return 17444;
        case "Radiant Hemorphite":
            return 17445;
        case "Hedbergite":
            return 21;
        case "Vitric Hedbergite":
            return 17440;
        case "Glazed Hedbergite":
            return 17441;
        case "Gneiss":
            return 1229;
        case "Iridiscent Gneiss":
            return 17865;
        case "Prismatic Gneiss":
            return 17866;
        case "Dark Ochre":
            return 1232;
        case "Onyx Ochre":
            return 17436;
        case "Obsidian Ochre":
            return 17437;
        case "Crokite":
            return 1225;
        case "Sharp Crokite":
            return 17432;
        case "Crystalline Crokite":
            return 17432;
        case "Spodumain":
            return 19;
        case "Bright Spodumain":
            return 17466;
        case "Gleaming Spodumain":
            return 17466;
        case "Bistot":
            return 1223;
        case "Triclinic Bistot":
            return 17428;
        case "Monoclinic Bistot":
            return 17428;
        case "Arkonor":
            return 22;
        case "Crimson Arkonor":
            return 17425;
        case "Prime Arkonor":
            return 17426;
        case "Mercoxit":
            return 11396;
        case "Magma Mercoxit":
            return 17869;
        case "Vitreous Mercoxit":
            return 17870;
        default:
            return -1;
    }
}