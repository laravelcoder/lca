<?php
namespace App\Libraries;

use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class GoogleAnalytics{

    static function country() {
        $country = Analytics::performQuery(Period::days(14),'ga:sessions',  ['dimensions'=>'ga:country','sort'=>'-ga:sessions']);
        $result= collect($country['rows'] ?? [])->map(function (array $dateRow) {
            return [
                'country' =>  $dateRow[0],
                'sessions' => (int) $dateRow[1],
            ];
        });
        /* $data['country'] = $result->pluck('country'); */
        /* $data['country_sessions'] = $result->pluck('sessions'); */
        return $result;
    }

    static function topbrowsers()
    {
        $analyticsData = Analytics::fetchTopBrowsers(Period::days(14));
        $array = $analyticsData->toArray();
        foreach ($array as $k=>$v)
        {
            $array[$k] ['label'] = $array[$k] ['browser'];
            unset($array[$k]['browser']);
            $array[$k] ['value'] = $array[$k] ['sessions'];
            unset($array[$k]['sessions']);
            $array[$k]['color'] = $array[$k]['highlight'] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }
        return json_encode($array);
    }





public function visitorsAndPageViews()
  {
    $analyticsData_one = Analytics::fetchVisitorsAndPageViews(Period::days(14));
      $this->data['date']  = $analyticsData_one->pluck('date');
      $this->data['visitors']  = $analyticsData_one->pluck('visitors');
      $this->data['pageTitle']  = $analyticsData_one->pluck('pageTitle');
      $this->data['pageViews']  = $analyticsData_one->pluck('pageViews');

      dd($this->data);
  }

  // public function totalVisitorsAndPageViews()
  // {
  //    $analyticsData_three = Analytics::fetchTotalVisitorsAndPageViews(Period::days(14));
  //    $this->data['date'] = $analyticsData_three->pluck('date');
  //    $this->data['visitors'] = $analyticsData_three->pluck('visitors');
  //    $this->data['pageViews'] = $analyticsData_three->pluck('pageViews');
  //    dd($this->data);
  // }

  // public function MostVisitedPages()
  // {
  //    $analyticsData_mvp = Analytics::fetchMostVisitedPages(Period::days(14));
  //    $this->data['url'] = $analyticsData_mvp->pluck('url');
  //    $this->data['pageTitle '] = $analyticsData_mvp->pluck('pageTitle');
  //    $this->data['pageViews'] = $analyticsData_mvp->pluck('pageViews');
  //    dd($this->data);
  // }

  public function topReferrers()
  {
     $analyticsData_three = Analytics::fetchTopReferrers(Period::days(14));
     $this->data['url'] = $analyticsData_three->pluck('url');
     $this->data['pageViews '] = $analyticsData_three->pluck('pageViews');
     dd($this->data);
  }

  // public function topbrowsers()
  // {
  //   $analyticsData_three = Analytics::fetchTopBrowsers(Period::days(14));
  //   $this->data['browser'] = $analyticsData_three->pluck('browser');
  //   $this->data['sessions '] = $analyticsData_three->pluck('sessions');
  //   dd($this->data);
  // }


  // public function country() {
  //       $country = Analytics::performQuery(Period::days(14),'ga:sessions',  ['dimensions'=>'ga:country','sort'=>'-ga:sessions']);
  //       $result= collect($country['rows'] ?? [])->map(function (array $dateRow) {
  //           return [
  //               'country' =>  $dateRow[0],
  //               'sessions' => (int) $dateRow[1],
  //           ];
  //       });
  //        $data['country'] = $result->pluck('country');
  //        $data['country_sessions'] = $result->pluck('sessions');
  //       dd($data);
  //   }

    // public function operatingSystem() {
    //       $country = Analytics::performQuery(Period::days(14),'ga:sessions',  ['dimensions'=>'ga:operatingSystem','metrics'=>'ga:sessions']);
    //       $result= collect($country['rows'] ?? [])->map(function (array $dateRow) {
    //           return [
    //               'operatingSystem' =>  $dateRow[0],
    //               'sessions' =>  $dateRow[0],

    //           ];
    //       });
    //        $data['operatingSystem'] = $result->pluck('operatingSystem');
    //        $data['sessions'] = $result->pluck('sessions');
    //        dd($data);
    //   }
}