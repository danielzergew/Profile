<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerAchievements extends Controller
{
    public $achievementsData = [
        [
            "slug" => 'table-tennis-2nd-place',
            "title" => 'Table Tennis 2nd Place',
            "year" => '2022',
            "desc" => 'Table Tennis League held by RTB\' Creative Team, Achieved in PPTI BCA on the 4th Cawu',
            "rarity" => 'SR',
            "photo" => 'pingpong.jpg'
        ],
        [
            "slug" => 'best-graduate',
            "title" => 'Best Graduate',
            "year" => '2021',
            "desc" => '12 Grade Best Graduate in Technology Class',
            "rarity" => 'SSR',
            "photo" => 'graduate.jpg'
        ],
        [
            "slug" => "bank-indonesia-education-video-competition-finalist",
            "title" => 'Bank Indonesia Education Video Competition Finalist (Malang)',
            "year" => '2020',
            "desc" => '1 of the 10 finalist of Educational Video Competition held by Perpustakaan Bank Indonesia Malang',
            "rarity" => 'R',
            "photo" => 'finalis.jpg'
        ],
        [
            "slug" => 'best-character-10th-grade',
            "title" => 'Best Character',
            "year" => '2020',
            "desc" => 'Best in character on 10th Grade',
            "rarity" => 'SR',
            "photo" => 'character.jpg'
        ],
        [
            "slug" => 'best-leadership-9th-grade',
            "title" => 'Best Leadership',
            "year" => '2019',
            "desc" => 'Best in Leadership on 9th Grade',
            "rarity" => 'SR',
            "photo" => 'leadership.jpg'
        ],
        [
            "slug" => 'best-character-8th-grade',
            "title" => 'Best Character',
            "year" => '2018',
            "desc" => 'Best in character on 8th Grade',
            "rarity" => 'SR',
            "photo" => 'character2.jpg'
        ],
        [
            "slug" => 'best-academic-7th-grade',
            "title" => 'Best Academic',
            "year" => '2017',
            "desc" => 'Best in Academic on 7th Grade',
            "rarity" => 'SR',
            "photo" => 'academic.jpg'
        ],
        [
            "slug" => 'best-leadership-7th-grade',
            "title" => 'Best Leadership',
            "year" => '2016',
            "desc" => 'Best in Leadership on 7th Grade',
            "rarity" => 'SR',
            "photo" => 'leadership2.png'
        ],
        [
            "slug" => 'elementary-achievements',
            "title" => 'Elementary Achievement',
            "year" => '2009-2015',
            "desc" => 'Best in Academic (2nd Grade), Computer, Art, Music, and Matematics',
            "rarity" => 'SR',
            "photo" => 'medals.jpg'
        ]
    ];

    public function index() {
        $achievements = $this->achievementsData;
        return view('achievements', compact('achievements'));
    }

    public function single($slug) {
        $datalist = $this->achievementsData;
        $temp = -1;
        for ($i = 0; $i < count($datalist); $i++) {
            if($datalist[$i]["slug"] == $slug) {
                $temp = $i;
            }
        }
        $singleAchievement = $datalist[$temp];
        return view('achievementsSingle', compact('singleAchievement'));
    }
}
