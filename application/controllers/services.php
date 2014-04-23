<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['output'] = $this->rendom_text();
		// $this->load->view('services/main', $data);
		redirect(base_url('clipping-path'));
	}

	public function single($page)
	{
		$meta_data = array(
				'clipping-path' => array(
						'title' => 'Photoshop Clipping Path Services',
						'meta_desc' => 'CPF provides affordable Clipping Path services covering all aspects of Regular, Multiple and Overlapping clipping path following the exact client requirements.',
						'meta_key' => 'Photoshop clipping path services, regular clipping path services, multiple clipping path services, overlapping clipping path services, affordable clipping path services.',
					), 
				'photoshop-masking' => array(
						'title' => 'Photoshop Clipping Mask Services',
						'meta_desc' => 'Photoshop Clipping Mask Services hub for any kind of erasing and masking projects where color, shapes, and layers need optimum editing brilliancy.',
						'meta_key' => 'clipping mask services, photoshop clipping mask services, regular masking services, channel masking services, layer masking services, transparency masking services, alpha masking services',
					), 
				'color-masking' => array(
						'title' => 'Color Masking Services',
						'meta_desc' => 'CPF provides Color masking services with extreme level of professionalism and deliver you the best possible color combination that the images were required to have.',
						'meta_key' => 'color masking services, color masking technology, advanced color masking, cheap color masking services',
					), 
				'photo-retouch' => array(
						'title' => 'Photo/Image Retouch Services',
						'meta_desc' => 'Image Retouch services with the 100% assurance of better, shiner, brighter and précised version for every images your asked CPF to process.',
						'meta_key' => 'photo retouch services, image retouch services, image retouching services, photo retouching services',
					), 
				'old-photo-restoration' => array(
						'title' => 'Old Photo Restoration Services',
						'meta_desc' => 'Old Photo Restoration services for the Photographers, Image Media House, Magazines, Web Publishers and Printing industry at affordable rates.',
						'meta_key' => 'old photo restoration services, old image restoration services, image enhancing services, reconstructing image services, recomposing image services',
					), 
				'neck-join' => array(
						'title' => 'Neck Joint Services',
						'meta_desc' => 'Neck join services on articulating neck on images with 100% accuracy in color, shape and design consistency.',
						'meta_key' => 'neck join services, neck joint services, color neck joint services, design neck joint services',
					), 
				'mannequin-removal' => array(
						'title' => 'Mannequin Removal Services',
						'meta_desc' => 'Remove or separate the unwanted part of your favorite images by CPF’s Invisible Man Removal  services or Mannequin removal services.',
						'meta_key' => 'mannequin removal services, invisible man removal services',
					), 
				'shadow-creation' => array(
						'title' => 'Shadow Creation Services',
						'meta_desc' => 'CPF provides Shadow creation services at affordable prices that covers the Drop Shadow, Mirror Shadow & Original Shadow initialization on images.',
						'meta_key' => 'shadow creation services, affordable shadow creation services, mirror shadow creation services, original shadow creation services',
					), 
				'reflection-creation' => array(
						'title' => 'Reflection Creation Services',
						'meta_desc' => 'Our Perfect Cut Out and Reflection Creation Services ensure the precise implementation of reflections on your desired images.',
						'meta_key' => 'reflection creation services, perfect cut out services',
					), 
				'cropping-resize' => array(
						'title' => 'Cropping and Resize Services',
						'meta_desc' => 'Cropping by Maintaining exact measurement and keeping up perfect sizing ratio in resizing a photo is very tough job and this is what we provide as services!',
						'meta_key' => 'cropping and resizing services, image cropping services, image resizing services',
					), 
				'web-image-optimization' => array(
						'title' => 'Web Image Optimization Services',
						'meta_desc' => 'CPF offers effective web image optimization services to the web publishers and infopreneurs by compression larger images into lighter one with the quality intact.',
						'meta_key' => 'web image compression services, web image optimization services, website faster loading consultancy, web image compression provider',
					), 
				'logo-and-identity-design' => array(
						'title' => 'Logo and Identity Design Services',
						'meta_desc' => 'If you are looking for a complete Identity design services that are affordable and own super creativity; then you are in right place!',
						'meta_key' => 'logo design services, identity design services, brochure design services, business card design services',
					),
				'ui-design' => array(
						'title' => 'UI Design Services',
						'meta_desc' => 'We know how visitors interact within a webpages and what types of graphic people love the most. We help you to do that exactly by our UI Design services.',
						'meta_key' => 'ui design services, user interface design services, user experience design services',
					)
			);
		
		$data = $meta_data[$page];
		$data['output'] = $this->rendom_text();
		
		$this->load->view('services/'.$page, $data);
	}

	public function price()
	{
		$this->load->view('services/pricing_table');
	}

	public function rendom_text($key="")
	{
		$this->load->helper('content_helper');
		$text = array();
		$text['easy_way'] = easy_way_title() . easy_way_block();
		$text['service_feat_block1'] = service_feat_block1();
		$text['service_feat_block2'] = service_feat_block2();
		$text['service_feat_block3'] = service_feat_block3();
		$random_key = array_rand($text,1);

		if ($random_key!='easy_way') {
			$data['output'] = '<div class="service-feature-area">' . $text[$random_key] . '</div>';
		} else {
			$data['output'] = $text[$random_key];
		}
		return $data['output'];
	}

}

/* End of file services.php */
/* Location: ./application/controllers/services.php */