<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fontend extends CI_Controller
{

	public function navberMenu()
	{
        $data['menus'] = $this->db->where('parentId', 0)->order_by('id', 'ASC')->get('menu')->result();    
        foreach ($data['menus'] as $key => $value) {
            $data['menus'][$key]->submenu = $this->db->where('parentId', $value->id)->order_by('id', 'ASC')->get('menu')->result();
        }
		
		$this->load->view('frontend_view/navber_menu',$data);
	}

	public function home()
	{

		// $this->db->order_by('id', 'DESC');
		$data['slideSection'] = $this->db->get_where('home', array('type' => 'slider'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['celSection'] = $this->db->get_where('home', array('type' => 'celebrate'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['productHeading'] = $this->db->get_where('home', array('type' => 'production'), 1)->result_array();
		$data['productSection'] = $this->db->get_where('home', array('type' => 'production'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['capabilHeading'] = $this->db->get_where('home', array('type' => 'capabilities'), 1)->result_array();
		$data['capabilSec'] = $this->db->get_where('home', array('type' => 'capabilities'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['currentHeading'] = $this->db->get_where('home', array('type' => 'current_ffer'), 1)->result_array();
		$data['currentSec'] = $this->db->get_where('home', array('type' => 'current_ffer'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['partnerHeading'] = $this->db->get_where('home', array('type' => 'partner'), 1)->result_array();
		$data['partnerSec'] = $this->db->get_where('home', array('type' => 'partner'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/home', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);
		// $this->load->view('frontend_view/home', $data);
	}

	public function footer()
	{
		$this->db->order_by('id', 'DESC');
		$data['dyFooter'] = $this->db->get_where('footer', array('type' => 'about'), 1)->result_array();
		$this->db->order_by('id', 'DESC');
		$data['comFooter'] = $this->db->get_where('footer', array('type' => 'company'), 1)->result_array();
		$this->db->order_by('id', 'DESC');
		$data['contFooter'] = $this->db->get_where('footer', array('type' => 'contact'), 1)->result_array();
		// return $data;
		$this->load->view('frontend_view/footer', $data);
	}

	public function about_us()
	{
		$this->db->order_by('id', 'DESC');
		$data['bannerTop'] = $this->db->get_where('company', array('type' => 'about_banner'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['about'] = $this->db->get_where('company', array('type' => 'about_us'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['missionHead'] = $this->db->get_where('company', array('type' => 'mission'), 1)->result_array();
		$data['missionSec'] = $this->db->get_where('company', array('type' => 'mission'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/company/about_us', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);
		// $this->load->view('frontend_view/company/about_us', $data);
	}

	public function our_milestone()
	{
		$this->db->order_by('id', 'DESC');
		$data['mileBannerTop'] = $this->db->get_where('company', array('type' => 'milestone_banner'), 1)->result_array();

		$data['mile_calender'] = $this->db->get_where('company', array('type' => 'milestone_calender'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/company/our_milestone', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/company/our_milestone', $data);
	}

	public function our_team()
	{
		$this->db->order_by('id', 'DESC');
		$data['teamBannerTop'] = $this->db->get_where('company', array('type' => 'team_banner'), 1)->result_array();

		$data['team_memberSec'] = $this->db->get_where('company', array('type' => 'team_member'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/company/our_team', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/company/our_team', $data);
	}

	public function team_organogram()
	{
		$this->db->order_by('id', 'DESC');
		$data['orga_banner'] = $this->db->get_where('company', array('type' => 'organogram_banner'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['plan_chartSec'] = $this->db->get_where('company', array('type' => 'plan_chart'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/company/team_organogram', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/company/team_organogram', $data);
	}

	public function our_coverage()
	{
		$this->db->order_by('id', 'DESC');
		$data['cover_banner'] = $this->db->get_where('company', array('type' => 'coverage_banner'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['coverage_mapSec'] = $this->db->get_where('company', array('type' => 'coverage_map'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

	
		$data['subview'] = $this->load->view('frontend_view/company/our_coverage', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/company/our_coverage', $data);
	}

	public function poultry()
	{
		$this->db->order_by('id', 'DESC');
		$data['poul_banner'] = $this->db->get_where('produtcs', array('type' => 'poultry_banner'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['antibioticHead'] = $this->db->get_where('produtcs', array('type' => 'antibiotic'), 1)->result_array();

		$data['antibioticSec'] = $this->db->get_where('produtcs', array('type' => 'antibiotic'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['probiotic'] = $this->db->get_where('produtcs', array('type' => 'probiotic'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['waterHead'] = $this->db->get_where('produtcs', array('type' => 'water'), 1)->result_array();
		$data['waterSec'] = $this->db->get_where('produtcs', array('type' => 'water'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['nsaidHead'] = $this->db->get_where('produtcs', array('type' => 'nsaid'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['premixHead'] = $this->db->get_where('produtcs', array('type' => 'premix'), 1)->result_array();
		$data['premixSec'] = $this->db->get_where('produtcs', array('type' => 'premix'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['disination'] = $this->db->get_where('produtcs', array('type' => 'disi'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

	
		$data['subview'] = $this->load->view('frontend_view/produtcs/poultry', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/produtcs/poultry', $data);
	}

	public function dairy()
	{
		$this->db->order_by('id', 'DESC');
		$data['dairyBanner'] = $this->db->get_where('produtcs', array('type' => 'dairy_banner'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['antiInjecHead'] = $this->db->get_where('produtcs', array('type' => 'antiInjec'), 1)->result_array();
		$data['antiInjecSec'] = $this->db->get_where('produtcs', array('type' => 'antiInjec'),1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['hormonioticHead'] = $this->db->get_where('produtcs', array('type' => 'hormoniotic'), 1)->result_array();
		$data['hormonioticSec'] = $this->db->get_where('produtcs', array('type' => 'hormoniotic'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['nsaidInjHead'] = $this->db->get_where('produtcs', array('type' => 'nsaidInjection'), 1)->result_array();
		$data['nsaidInjSec'] = $this->db->get_where('produtcs', array('type' => 'nsaidInjection'),1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['vitaminHead'] = $this->db->get_where('produtcs', array('type' => 'vitamin'), 1)->result_array();
		$data['vitaminSec'] = $this->db->get_where('produtcs', array('type' => 'vitamin'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['feedpreHead'] = $this->db->get_where('produtcs', array('type' => 'feedpre'), 1)->result_array();
		$data['feedpreSec'] = $this->db->get_where('produtcs', array('type' => 'feedpre'),1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/produtcs/dairy', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/produtcs/dairy', $data);
	}

	public function our_Partners()
	{

		$this->db->order_by('id', 'DESC');
		$data['partnerBanner'] = $this->db->get_where('our_partners', array('type' => 'partner_banner'), 1)->result_array();

		$data['contantSec'] = $this->db->get_where('our_partners', array('type' => 'contant'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/our_partners', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/our_partners', $data);
	}

	public function corporate_buyers()
	{
		$this->db->order_by('id', 'DESC');
		$data['corporateBanner'] = $this->db->get_where('corporate_buyers', array('type' => 'corporate_banner'), 1)->result_array();

		$data['corporateSec'] = $this->db->get_where('corporate_buyers', array('type' => 'corporate'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/corporate_buyers', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/corporate_buyers', $data);
	}

	public function gallery()
	{
		$this->db->order_by('id', 'DESC');
		$data['galleryBanner'] = $this->db->get_where('gallery', array('type' => 'gallery_banner'), 1)->result_array();

		$this->db->order_by('id', 'DESC');
		$data['galleryHead'] = $this->db->get_where('gallery', array('type' => 'gallery'), 1)->result_array();
		$data['gallerySec'] = $this->db->get_where('gallery', array('type' => 'gallery'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

		$data['subview'] = $this->load->view('frontend_view/gallery', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/gallery', $data);
	}

	public function contact()
	{

		$this->db->order_by('id', 'DESC');
		$data['contactBanner'] = $this->db->get_where('contact', array('type' => 'contact_banner'), 1)->result_array();

		$data['contactSec'] = $this->db->get_where('contact', array('type' => 'contact'))->result_array();

		$this->db->order_by('id', 'DESC');
		$data['banner'] = $this->db->get_where('home', array('type' => 'banner'), 1)->result_array();

	
		$data['subview'] = $this->load->view('frontend_view/contact', $data, true);
        $this->load->view('frontend_view/layoutMain', $data);

		// $this->load->view('frontend_view/contact', $data);
	}
}
