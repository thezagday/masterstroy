<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function show(): View
    {
        return view('services.foundation_works.raising_house');
    }

    public function foundationRepairShow(): View
    {
        return view('services.foundation_works.foundation_repair');
    }

    public function replacementRimsHouseShow(): View
    {
        return view('services.foundation_works.replacement_rims_house');
    }

    public function dismantlingWallsShow(): View
    {
        return view('services.dismantling_works.dismantling_walls');
    }

    public function dismantlingFloorsShow(): View
    {
        return view('services.dismantling_works.dismantling_floors');
    }

    public function dismantlingBuildingsShow(): View
    {
        return view('services.dismantling_works.dismantling_buildings');
    }

    public function metalStructuresShow(): View
    {
        return view('services.dismantling_works.dismantling_metal_structures');
    }

    public function frameHousesShow(): View
    {
        return view('services.frame_houses');
    }

    public function sidingShow(): View
    {
        return view('services.facade_works.siding');
    }

    public function claddingBlockHouseShow(): View
    {
        return view('services.facade_works.cladding_block_house');
    }

    public function houseCladdingWoodShow(): View
    {
        return view('services.facade_works.house_cladding_wood');
    }

    public function paintingFacadeHouseShow(): View
    {
        return view('services.facade_works.painting_facade_house');
    }

    public function ovenMasonryShow(): View
    {
        return view('services.oven_works.oven_masonry');
    }

    public function ovenCladdingShow(): View
    {
        return view('services.oven_works.oven_cladding');
    }

    public function installationHeatingBoilerShow(): View
    {
        return view('services.oven_works.installation_heating_boiler');
    }

    public function chimneyInstallationShow(): View
    {
        return view('services.oven_works.chimney_installation');
    }

    public function careGravesShow(): View
    {
        return view('services.care_graves');
    }

    public function repairWellsShow(): View
    {
        return view('services.repair_wells');
    }

    public function garbageRemovalShow(): View
    {
        return view('services.improvement_territory.garbage_removal');
    }

    public function mowingGrassShow(): View
    {
        return view('services.improvement_territory.mowing_grass');
    }

    public function diggingTrenchesShow(): View
    {
        return view('services.improvement_territory.digging_trenches');
    }

    public function cleaningLocalAreaShow(): View
    {
        return view('services.improvement_territory.cleaning_local_area');
    }

    public function layingLaminateShow(): View
    {
        return view('services.laying_floor.laying_laminate');
    }

    public function layingParquetShow(): View
    {
        return view('services.laying_floor.laying_parquet');
    }

    public function layingWoodFloorShow(): View
    {
        return view('services.laying_floor.laying_wood_floor');
    }

    public function layingPlywoodShow(): View
    {
        return view('services.laying_floor.laying_plywood');
    }

    public function layingFloorboardShow(): View
    {
        return view('services.laying_floor.laying_floorboard');
    }
}
