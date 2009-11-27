<?php

//various constants for constanty things

define('NO_GENDER', 0);
define('FEMALE', 1);
define('MALE', 2);

//Race
define('NO_RACE', 0);
define('HUMAN', 1);
define('DWARF', 2);
define('ELF', 3);
define('GNOME', 4);
define('HALF-ELF', 5);
define('HALF-ORC', 6);
define('HALFLING', 7);

//Classes
define('NO_CLASS', 0);
define('BARBARIAN', 1);
define('BARD', 2);
define('CLERIC', 3);
define('DRUID', 4);
define('FIGHTER', 5);
define('MONK', 6);
define('PALADIN', 7);
define('RANGER', 8);
define('ROGUE', 9);
define('SORCERER', 10);
define('WIZARD', 11);

//Alignment
define('NO_ALIGNMENT', 0);
define('LAWFUL_GOOD', 1);
define('NEUTRAL_GOOD', 2);
define('CHAOTIC_GOOD', 3);
define('LAWFUL_NEUTRAL', 4);
define('NEUTRAL', 5);
define('CHAOTIC_NEUTRAL', 6);
define('LAWFUL_EVIL', 7);
define('NEUTRAL_EVIL', 8);
define('CHAOTIC_EVIL', 9);

//Dieties
// IDEA: RECOMMEND A DIETY?
define('NO_DIETY', 0);
define('BOCCOB', 1); // God of Magic -- NEUTRAL -- WIZARD, SORCERER, sage
define('CORELLON_LARETHIAN', 2);//God of Elves -- CHAOTIC_GOOD -- ELF, HALF_ELF, BARD
define('EHLONNA', 3); //Goddess of the woodlands -- NEUTRAL_GOOD -- ELF, GNOME, HALF_ELF, HALFLING, RANGER, DRUID
define('ERYTHNUL', 4); //God of Slaughter -- CHAOTIC_EVIL -- evil fighter, BARBARIAN, ROGUE
define('FHARLANGHN', 5); //God of Roads -- NEUTRAL-- BARD, adventures, merchants
define('GARL_GLITTERGOLD', 6); //God of Gnomes -- NEUTRAL_GOOD -- GNOME
define('GRUUMSH', 7);// GOD OF ORCS -- CHAOTIC_EVIL -- HALF_ORC, orc
define('HEIRONEOUS', 8); //God of Valor -- LAWFUL_GOOD -- PALADINS,FIGHTERS,MONKS
define('HEXTOR', 9); //God of Tyranny -- LAWFUL_EVIL -- evil fighers, MONK
define('KORD', 10); //God of Strength -- CHAOTIC_GOOD -- FIGHTER, BARBARIAN, ROGUE, athletes
define('MORADIN', 11); //God of Dwarves -- LAWFUL_GOOD -- DWARF
define('NERULL', 12); //God of Death -- NEUTRAL_EVIL -- evil necromancers, ROGUE
define('OBAD-HAI', 13); // God of Nature -- NEUTRAL -- DRUID, BARBARIAN, RANGER
define('OLIDAMMARA', 14); //God of Thieves -- CHAOTIC NEUTRAL -- ROGUE, BARD, theif
define('PELOR', 15); //God of Sun -- NEUTRAL_GOOD -- RANGER, BARD
define('ST_CUTHBERT', 16); //God of Retribution -- LAWFUL_NEUTRAL -- FIGHTER, MONK, soldier
define('VECNA', 17); //God of Secrets -- NEUTRAL_EVIL -- evil WIZARD, SORCERER, ROGUE, spies
define('WEE_JAS', 18); //Goddess of death and magic -- LAWFUL_NEUTRAL - WIZARD, necromancer, SORCERER
define('YONDALLA', 19); //Goddess of the halflings -- LAWFUL_GOOD -- HALFLING
define('OTHER', 20); //possibly make a popup show up for this?

//SIZE
define('NO_SIZE', 0);
define('SMALL', 1);
define('MEDIUM', 2);


//abilities
define('STR', 0);
define('DEX', 1);
define('CON', 2);
define('INT', 3);
define('WIS', 4);
define('CHA', 5);

//Skills -- work this out later
define('NOT_CLASS_SKILL', 0);
define('CLASS_SKILL', 1);
define('UNTRAINED', 2)


?>