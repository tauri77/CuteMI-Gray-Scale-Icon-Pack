<?php
/**
 * Plugin Name: CuteMI Gray Scale Icon Pack
 * Version:     0.1
 * Author:      Mauricio Galetto
 * Author URI:  https://geletto.info
 * Text Domain: cute-mediainfo
 * License:     GPL v3
 * Requires at least: 4.5
 * Requires PHP: 5.6
*/

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

add_action( 'plugins_loaded', 'cutemi_gray_scale_icon_pack_set_icons', 5, 0 );

function cutemi_gray_scale_icon_pack_set_icons() {
	
	if ( ! class_exists('CUTEMI_Base_Icon_Pack') ) {
		return;
	}

	$icons = new CUTEMI_Base_Icon_Pack( 'gray-scale' );

	$icons->label = 'Gray Scale';

	$icons->base_url = plugins_url( 'images', __FILE__ );

	$icons->misc_icons = [
		'block-general'    => './block-general.svg',
		'block-video'      => './block-video.svg',
		'block-audio'      => './block-audio.svg',
		'block-text'       => './block-text.svg',
		'block-link'       => './block-link.svg',
		'mediainfo'        => './mediainfo.svg',
		'duration'         => './duration.svg',
		'size'             => './size.svg',
		'date'             => './date.svg',
		'part'             => './part.svg',
	];

	$icons->terms_icons = [
		'cutemi_file_format'        => [
			"cutemi-file-format-3g2"    => './video-format/3G2.svg',
			"cutemi-file-format-3gp"    => './video-format/3GP.svg',
			"cutemi-file-format-avi"    => './video-format/AVI.svg',
			"cutemi-file-format-divx"   => './video-format/DIVX.svg',
			"cutemi-file-format-dvr-ms" => './video-format/DVR-MS.svg',
			"cutemi-file-format-evo"    => './video-format/EVO.svg',
			"cutemi-file-format-f4v"    => './video-format/F4V.svg',
			"cutemi-file-format-flv"    => './video-format/FLV.svg',
			"cutemi-file-format-m2ts"   => './video-format/M2TS.svg',
			"cutemi-file-format-m4v"    => './video-format/M4V.svg',
			"cutemi-file-format-mcf"    => './video-format/MCF.svg',
			"cutemi-file-format-mkv"    => './video-format/MKV.svg',
			"cutemi-file-format-mov"    => './video-format/MOV.svg',
			"cutemi-file-format-mp4"    => './video-format/MP4.svg',
			"cutemi-file-format-mpeg"   => './video-format/MPEG.svg',
			"cutemi-file-format-mxf"    => './video-format/MXF.svg',
			"cutemi-file-format-ogg"    => './video-format/OGG.svg',
			"cutemi-file-format-ps"     => './video-format/PS.svg',
			"cutemi-file-format-rmvb"   => './video-format/RMVB.svg',
			"cutemi-file-format-ts"     => './video-format/TS.svg',
			"cutemi-file-format-vob"    => './video-format/VOB.svg',
			"cutemi-file-format-webm"   => './video-format/WEBM.svg',
			"cutemi-file-format-wmv"    => './video-format/WMV.svg',
			"cutemi-file-format-wtv"    => './video-format/WTV.svg',
		],
		'cutemi_video_resolution'   => [
			'cutemi-video-resolution-2k'      => './resolutions/2K.svg',
			'cutemi-video-resolution-4k'      => './resolutions/4K.svg',
			'cutemi-video-resolution-5k'      => './resolutions/5K.svg',
			'cutemi-video-resolution-6k'      => './resolutions/6K.svg',
			'cutemi-video-resolution-8k'      => './resolutions/8K.svg',
			'cutemi-video-resolution-full-hd' => './resolutions/FHD.svg',
			'cutemi-video-resolution-hd'      => './resolutions/HD.svg',
			'cutemi-video-resolution-ld'      => './resolutions/LD.svg',
			'cutemi-video-resolution-sd'      => './resolutions/SD.svg',
		],
		'cutemi_video_tech'         => [
			'cutemi-video-tech-3ivx'                    => './video-tech/MPEG4-ASP-3ivx.svg',
			'cutemi-video-tech-divx'                    => './video-tech/MPEG4-ASP-divx.svg',
			'cutemi-video-tech-h261'                    => './video-tech/h.261.svg',
			'cutemi-video-tech-h263'                    => './video-tech/h.263.svg',
			'cutemi-video-tech-h265'                    => './video-tech/h.265.svg',
			'cutemi-video-tech-mpeg-1'                  => './video-tech/mpeg-1.svg',
			'cutemi-video-tech-mpeg-2'                  => './video-tech/mpeg-2.svg',
			'cutemi-video-tech-mpeg-4-asp'              => './video-tech/MPEG4-ASP.svg',
			'cutemi-video-tech-mpeg-4-sp'               => './video-tech/MPEG4-SP.svg',
			'cutemi-video-tech-mpeg-4-avc'              => './video-tech/h.264.svg',
			'cutemi-video-tech-mvc'                     => './video-tech/MVC.svg',
			'cutemi-video-tech-mpeg-4-nero-digital'     => './video-tech/MPEG4-ASP-nero.svg',
			'cutemi-video-tech-mpeg-4-nero-digital-avc' => './video-tech/MPEG4-AVC-nero.svg',
			'cutemi-video-tech-quicktime-6'             => './video-tech/MPEG4-ASP-qt6.svg',
			'cutemi-video-tech-quicktime-6-sp'          => './video-tech/MPEG4-SP-qt6.svg',
			'cutemi-video-tech-quicktime-7'             => './video-tech/MPEG4-AVC-qt7.svg',
			'cutemi-video-tech-r10-r13'                 => './video-tech/RV10.svg',
			'cutemi-video-tech-rv60'                    => './video-tech/RV60.svg',
			'cutemi-video-tech-rv30'                    => './video-tech/RV30.svg',
			'cutemi-video-tech-rv40'                    => './video-tech/RV40.svg',
			'cutemi-video-tech-rv20'                    => './video-tech/RV20.svg',
			'cutemi-video-tech-theora'                  => './video-tech/theora.svg',
			'cutemi-video-tech-vc-1'                    => './video-tech/VC-1.svg',
			'cutemi-video-tech-vp3'                     => './video-tech/VP3.svg',
			'cutemi-video-tech-vp4'                     => './video-tech/VP4.svg',
			'cutemi-video-tech-vp5'                     => './video-tech/VP5.svg',
			'cutemi-video-tech-vp6'                     => './video-tech/VP6.svg',
			'cutemi-video-tech-vp7'                     => './video-tech/VP7.svg',
			'cutemi-video-tech-vp8'                     => './video-tech/VP8.svg',
			'cutemi-video-tech-vp9'                     => './video-tech/VP9.svg',
			'cutemi-video-tech-wmv3'                    => './video-tech/VC-1-wmv3.svg',
			'cutemi-video-tech-wmva'                    => './video-tech/VC-1-wmva.svg',
			'cutemi-video-tech-wvc1'                    => './video-tech/VC-1-wvc1.svg',
			'cutemi-video-tech-x264'                    => './video-tech/MPEG4-AVC-x264.svg',
			'cutemi-video-tech-xvid'                    => './video-tech/MPEG4-ASP-xvid.svg',
			'cutemi-video-tech-flv1'                    => './video-tech/FLV1.svg',
			'cutemi-video-tech-svq1'                    => './video-tech/SVQ1.svg',
			'cutemi-video-tech-svq3'                    => './video-tech/SVQ3.svg',
			'cutemi-video-tech-i263'                    => './video-tech/I263.svg',
			'cutemi-video-tech-jpeg'                    => './video-tech/JPEG.svg',
			'cutemi-video-tech-mjpeg'                   => './video-tech/MJPEG.svg',
			'cutemi-video-tech-mpeg-4'                  => './video-tech/MPEG-4.svg',
			'cutemi-video-tech-mpng'                    => './video-tech/MPNG.svg',
			'cutemi-video-tech-wmv-old'                 => './video-tech/Old_WMV.svg',
			'cutemi-video-tech-webp'                    => './video-tech/WebP.svg',
			'cutemi-video-tech-wmv1'                    => './video-tech/WMV1.svg',
			'cutemi-video-tech-wmv2'                    => './video-tech/WMV2.svg',
		],
		'cutemi_video_bitrate_mode' => [
			'cutemi-video-bitrate-mode-cbr' => './video-bitrate-mode/cbr.svg',
			'cutemi-video-bitrate-mode-vbr' => './video-bitrate-mode/vbr.svg',
			'cutemi-video-bitrate-mode-abr' => './video-bitrate-mode/abr.svg',
		],
		'cutemi_video_bitrate'      => [
			"cutemi-video-bitrate-1-m"   => './video-bitrate/1_Mbps.svg',
			"cutemi-video-bitrate-1-5-m" => './video-bitrate/1.5_Mbps.svg',
			"cutemi-video-bitrate-10-m"  => './video-bitrate/10_Mbps.svg',
			"cutemi-video-bitrate-100-m" => './video-bitrate/100_Mbps.svg',
			"cutemi-video-bitrate-110-m" => './video-bitrate/110_Mbps.svg',
			"cutemi-video-bitrate-12-m"  => './video-bitrate/12_Mbps.svg',
			"cutemi-video-bitrate-120-m" => './video-bitrate/120_Mbps.svg',
			"cutemi-video-bitrate-130-m" => './video-bitrate/130_Mbps.svg',
			"cutemi-video-bitrate-14-m"  => './video-bitrate/14_Mbps.svg',
			"cutemi-video-bitrate-140-m" => './video-bitrate/140_Mbps.svg',
			"cutemi-video-bitrate-150-m" => './video-bitrate/150_Mbps.svg',
			"cutemi-video-bitrate-16-m"  => './video-bitrate/16_Mbps.svg',
			"cutemi-video-bitrate-175-m" => './video-bitrate/175_Mbps.svg',
			"cutemi-video-bitrate-18-m"  => './video-bitrate/18_Mbps.svg',
			"cutemi-video-bitrate-2-m"   => './video-bitrate/2_Mbps.svg',
			"cutemi-video-bitrate-2-5-m" => './video-bitrate/2.5_Mbps.svg',
			"cutemi-video-bitrate-20-m"  => './video-bitrate/20_Mbps.svg',
			"cutemi-video-bitrate-200-m" => './video-bitrate/200_Mbps.svg',
			"cutemi-video-bitrate-25-m"  => './video-bitrate/25_Mbps.svg',
			"cutemi-video-bitrate-250-k" => './video-bitrate/250_kbps.svg',
			"cutemi-video-bitrate-3-m"   => './video-bitrate/3_Mbps.svg',
			"cutemi-video-bitrate-3-5-m" => './video-bitrate/3.5_Mbps.svg',
			"cutemi-video-bitrate-30-m"  => './video-bitrate/30_Mbps.svg',
			"cutemi-video-bitrate-35-m"  => './video-bitrate/35_Mbps.svg',
			"cutemi-video-bitrate-4-m"   => './video-bitrate/4_Mbps.svg',
			"cutemi-video-bitrate-4-5-m" => './video-bitrate/4.5_Mbps.svg',
			"cutemi-video-bitrate-40-m"  => './video-bitrate/40_Mbps.svg',
			"cutemi-video-bitrate-45-m"  => './video-bitrate/45_Mbps.svg',
			"cutemi-video-bitrate-5-m"   => './video-bitrate/5_Mbps.svg',
			"cutemi-video-bitrate-50-m"  => './video-bitrate/50_Mbps.svg',
			"cutemi-video-bitrate-500-k" => './video-bitrate/500_kbps.svg',
			"cutemi-video-bitrate-6-m"   => './video-bitrate/6_Mbps.svg',
			"cutemi-video-bitrate-60-m"  => './video-bitrate/60_Mbps.svg',
			"cutemi-video-bitrate-7-m"   => './video-bitrate/7_Mbps.svg',
			"cutemi-video-bitrate-70-m"  => './video-bitrate/70_Mbps.svg',
			"cutemi-video-bitrate-8-m"   => './video-bitrate/8_Mbps.svg',
			"cutemi-video-bitrate-80-m"  => './video-bitrate/80_Mbps.svg',
			"cutemi-video-bitrate-9-m"   => './video-bitrate/9_Mbps.svg',
			"cutemi-video-bitrate-90-m"  => './video-bitrate/90_Mbps.svg',
		],
		'cutemi_audio_tech'         => [
			'cutemi-audio-tech-aac'                      => './audio-techs/ACC.svg',
			'cutemi-audio-tech-aiff'                     => './audio-techs/aiff.svg',
			'cutemi-audio-tech-aiffc'                    => './audio-techs/aiffc.svg',
			'cutemi-audio-tech-alac'                     => './audio-techs/alac.svg',
			'cutemi-audio-tech-cdda'                     => './audio-techs/CDDA.svg',
			'cutemi-audio-tech-dolby-ac-4'               => './audio-techs/Dolby_ACC_4.svg',
			'cutemi-audio-tech-dolby-digital'            => './audio-techs/Dolby_Digital.svg',
			'cutemi-audio-tech-dolby-digital-ex'         => './audio-techs/Dolby_Digital_EX.svg',
			'cutemi-audio-tech-dolby-digital-plus'       => './audio-techs/Dolby_Digital_Plus.svg',
			'cutemi-audio-tech-dolby-digital-plus-atmos' => './audio-techs/Dolby_Atmos.svg',
			'cutemi-audio-tech-dolby-truehd'             => './audio-techs/Dolby_TrueHD.svg',
			'cutemi-audio-tech-dolby-truehd-with-atoms'  => './audio-techs/Dolby_Atmos.svg',
			'cutemi-audio-tech-dts'                      => './audio-techs/DTS.svg',
			'cutemi-audio-tech-dts-96-24'                => './audio-techs/DTS_96_24.svg',
			'cutemi-audio-tech-dts-express'              => './audio-techs/DTS_Express.svg',
			'cutemi-audio-tech-dts-es'                   => './audio-techs/DTS_ES.svg',
			'cutemi-audio-tech-dts-hd'                   => './audio-techs/DTS_HD.svg',
			'cutemi-audio-tech-dts-hd-ma'                => './audio-techs/DTS_HD_MA.svg',
			'cutemi-audio-tech-dts-x'                    => './audio-techs/DTS_X.svg',
			'cutemi-audio-tech-flac'                     => './audio-techs/FLAC.svg',
			'cutemi-audio-tech-he-acc'                   => './audio-techs/HE_ACC.svg',
			'cutemi-audio-tech-mp3'                      => './audio-techs/MP3.svg',
			'cutemi-audio-tech-mp2'                      => './audio-techs/MP2.svg',
			'cutemi-audio-tech-lpcm'                     => './audio-techs/LPCM.svg',
			'cutemi-audio-tech-opus'                     => './audio-techs/OPUS.svg',
			'cutemi-audio-tech-pcm'                      => './audio-techs/PCM.svg',
			'cutemi-audio-tech-realaudio'                => './audio-techs/RealAudio.svg',
			'cutemi-audio-tech-vorbis'                   => './audio-techs/Vorbis.svg',
			'cutemi-audio-tech-wav'                      => './audio-techs/WAV.svg',
			'cutemi-audio-tech-wavpack'                  => './audio-techs/WavPack.svg',
			'cutemi-audio-tech-wma'                      => './audio-techs/WMA.svg',
			'cutemi-audio-tech-wma-l'                    => './audio-techs/WMA_Lossless.svg',
			'cutemi-audio-tech-wma-pro'                  => './audio-techs/WMA_Pro.svg',
			'cutemi-audio-tech-adpcm'                    => './audio-techs/ADPCM.svg',
			'cutemi-audio-tech-dsd'                      => './audio-techs/DSD.svg',
		],
		'cutemi_audio_bitrate_mode' => [
			'cutemi-audio-bitrate-mode-cbr' => './audio-bitrate-mode/cbr.svg',
			'cutemi-audio-bitrate-mode-vbr' => './audio-bitrate-mode/vbr.svg',
			'cutemi-audio-bitrate-mode-abr' => './audio-bitrate-mode/abr.svg',
		],
		'cutemi_audio_bitrate'      => [
			"cutemi-audio-bitrate-1-m"   => './audio-bitrate/1_Mbps.svg',
			"cutemi-audio-bitrate-1-5-m" => './audio-bitrate/1.5_Mbps.svg',
			"cutemi-audio-bitrate-10-m"  => './audio-bitrate/10_Mbps.svg',
			"cutemi-audio-bitrate-112-k" => './audio-bitrate/112_kbps.svg',
			"cutemi-audio-bitrate-128-k" => './audio-bitrate/128_kbps.svg',
			"cutemi-audio-bitrate-140-k" => './audio-bitrate/140_kbps.svg',
			"cutemi-audio-bitrate-15-m"  => './audio-bitrate/15_Mbps.svg',
			"cutemi-audio-bitrate-16-k"  => './audio-bitrate/16_kbps.svg',
			"cutemi-audio-bitrate-160-k" => './audio-bitrate/160_kbps.svg',
			"cutemi-audio-bitrate-192-k" => './audio-bitrate/192_kbps.svg',
			"cutemi-audio-bitrate-2-m"   => './audio-bitrate/2_Mbps.svg',
			"cutemi-audio-bitrate-20-m"  => './audio-bitrate/20_Mbps.svg',
			"cutemi-audio-bitrate-200-k" => './audio-bitrate/200_kbps.svg',
			"cutemi-audio-bitrate-224-k" => './audio-bitrate/224_kbps.svg',
			"cutemi-audio-bitrate-24-k"  => './audio-bitrate/24_kbps.svg',
			"cutemi-audio-bitrate-240-k" => './audio-bitrate/240_kbps.svg',
			"cutemi-audio-bitrate-25-m"  => './audio-bitrate/25_Mbps.svg',
			"cutemi-audio-bitrate-256-k" => './audio-bitrate/256_kbps.svg',
			"cutemi-audio-bitrate-3-m"   => './audio-bitrate/3_Mbps.svg',
			"cutemi-audio-bitrate-30-m"  => './audio-bitrate/30_Mbps.svg',
			"cutemi-audio-bitrate-32-k"  => './audio-bitrate/32_kbps.svg',
			"cutemi-audio-bitrate-320-k" => './audio-bitrate/320_kbps.svg',
			"cutemi-audio-bitrate-384-k" => './audio-bitrate/384_kbps.svg',
			"cutemi-audio-bitrate-4-k"   => './audio-bitrate/4_kbps.svg',
			"cutemi-audio-bitrate-4-m"   => './audio-bitrate/4_Mbps.svg',
			"cutemi-audio-bitrate-40-m"  => './audio-bitrate/40_Mbps.svg',
			"cutemi-audio-bitrate-448-k" => './audio-bitrate/448_kbps.svg',
			"cutemi-audio-bitrate-48-k"  => './audio-bitrate/48_kbps.svg',
			"cutemi-audio-bitrate-5-m"   => './audio-bitrate/5_Mbps.svg',
			"cutemi-audio-bitrate-50-m"  => './audio-bitrate/50_Mbps.svg',
			"cutemi-audio-bitrate-512-k" => './audio-bitrate/512_kbps.svg',
			"cutemi-audio-bitrate-56-k"  => './audio-bitrate/56_kbps.svg',
			"cutemi-audio-bitrate-6-m"   => './audio-bitrate/6_Mbps.svg',
			"cutemi-audio-bitrate-64-k"  => './audio-bitrate/64_kbps.svg',
			"cutemi-audio-bitrate-640-k" => './audio-bitrate/640_kbps.svg',
			"cutemi-audio-bitrate-7-m"   => './audio-bitrate/7_Mbps.svg',
			"cutemi-audio-bitrate-768-k" => './audio-bitrate/768_kbps.svg',
			"cutemi-audio-bitrate-8-k"   => './audio-bitrate/8_kbps.svg',
			"cutemi-audio-bitrate-8-m"   => './audio-bitrate/8_Mbps.svg',
			"cutemi-audio-bitrate-80-k"  => './audio-bitrate/80_kbps.svg',
			"cutemi-audio-bitrate-896-k" => './audio-bitrate/896_kbps.svg',
			"cutemi-audio-bitrate-9-m"   => './audio-bitrate/9_Mbps.svg',
			"cutemi-audio-bitrate-96-k"  => './audio-bitrate/96_kbps.svg',
		],
		'cutemi_audio_channels'     => [
			'cutemi-audio-channels-1-0'  => './audio-channels/1.0.svg',
			'cutemi-audio-channels-11-0' => './audio-channels/11.0.svg',
			'cutemi-audio-channels-11-1' => './audio-channels/11.1.svg',
			'cutemi-audio-channels-2-0'  => './audio-channels/2.0.svg',
			'cutemi-audio-channels-2-1'  => './audio-channels/2.1.svg',
			'cutemi-audio-channels-3-0'  => './audio-channels/3.0.svg',
			'cutemi-audio-channels-3-1'  => './audio-channels/3.1.svg',
			'cutemi-audio-channels-4-0'  => './audio-channels/4.0.svg',
			'cutemi-audio-channels-4-1'  => './audio-channels/4.1.svg',
			'cutemi-audio-channels-5-0'  => './audio-channels/5.0.svg',
			'cutemi-audio-channels-5-1'  => './audio-channels/5.1.svg',
			'cutemi-audio-channels-6-0'  => './audio-channels/6.0.svg',
			'cutemi-audio-channels-6-1'  => './audio-channels/6.1.svg',
			'cutemi-audio-channels-7-0'  => './audio-channels/7.0.svg',
			'cutemi-audio-channels-7-1'  => './audio-channels/7.1.svg',
			'cutemi-audio-channels-8-0'  => './audio-channels/8.0.svg',
			'cutemi-audio-channels-8-1'  => './audio-channels/8.1.svg',
			'cutemi-audio-channels-9-0'  => './audio-channels/9.0.svg',
			'cutemi-audio-channels-9-1'  => './audio-channels/9.1.svg',
		],
		'cutemi_text_format'        => [
			'cutemi-text-format-ass'          => './text-format/ASS.svg',
			'cutemi-text-format-dvb-subtitle' => './text-format/DVB.svg',
			'cutemi-text-format-dvd-subtitle' => './text-format/DVD.svg',
			'cutemi-text-format-hdmv-pgs'     => './text-format/HDMV_PSG.svg',
			'cutemi-text-format-jacosub'      => './text-format/JACO.svg',
			'cutemi-text-format-microdvd'     => './text-format/MicroDVD.svg',
			'cutemi-text-format-mov-text'     => './text-format/MOV.svg',
			'cutemi-text-format-mpl2'         => './text-format/MPL2.svg',
			'cutemi-text-format-pjs'          => './text-format/PJS.svg',
			'cutemi-text-format-realtext'     => './text-format/RealText.svg',
			'cutemi-text-format-sami'         => './text-format/SAMI.svg',
			'cutemi-text-format-srt'          => './text-format/SRT.svg',
			'cutemi-text-format-ssa'          => './text-format/SSA.svg',
			'cutemi-text-format-stl'          => './text-format/STL.svg',
			'cutemi-text-format-subviewer'    => './text-format/SubViewer.svg',
			'cutemi-text-format-raw'          => './text-format/TXT.svg',
			'cutemi-text-format-vplayer'      => './text-format/VPlayer.svg',
			'cutemi-text-format-webvtt'       => './text-format/WebVTT.svg',
			'cutemi-text-format-xsub'         => './text-format/XSUB.svg',
			'cutemi-text-format-bmp'          => './text-format/BMP.svg',
			'cutemi-text-format-kate'         => './text-format/KATE.svg',
			'cutemi-text-format-ttml'         => './text-format/TTML.svg',
			'cutemi-text-format-ebu-stl'      => './text-format/EBU-STL.svg',
			"cutemi-text-format-cff-t"        => './text-format/CFF-T.svg',
			"cutemi-text-format-cmml"         => './text-format/CMML.svg',
			"cutemi-text-format-cvd"          => './text-format/CVD.svg',
			"cutemi-text-format-divx"         => './text-format/DivX.svg',
			"cutemi-text-format-ebu-tt"       => './text-format/EBU-TT.svg',
			"cutemi-text-format-ebu-tt-d"     => './text-format/EBU-TT-D.svg',
			"cutemi-text-format-imsc"         => './text-format/IMSC.svg',
			"cutemi-text-format-mp4tt"        => './text-format/MP4TT.svg',
			"cutemi-text-format-sdp-us"       => './text-format/SDP-US.svg',
			"cutemi-text-format-smpte-tt"     => './text-format/SMPTE-TT.svg',
			"cutemi-text-format-svcd"         => './text-format/SVCD.svg',
			"cutemi-text-format-usf"          => './text-format/USF.svg',
			"cutemi-text-format-vobsub"       => './text-format/VobSub.svg',
			"cutemi-text-format-dvb-teletext" => './text-format/DVB_Tele.svg',
			"cutemi-text-format-eia-608-cc"   => './text-format/EIA-608.svg',
			"cutemi-text-format-eia-708-cc"   => './text-format/EIA-708.svg',
			"cutemi-text-format-hdmv-text"    => './text-format/HDMV.svg',
			"cutemi-text-format-teletext"     => './text-format/Tele.svg',
		],
		'cutemi_text_type'          => [
			'cutemi-text-type-forced' => './text-types/forced.svg',
			'cutemi-text-type-sdh'    => './text-types/SDH.svg',
		],
		'cutemi_site_source'        => [
			'cutemi-link-source-1fichier'        => './link-source/1fichier.svg',
			'cutemi-link-source-amazon-drive'    => './link-source/amazon_drive.svg',
			'cutemi-link-source-amazon-drive-ue' => './link-source/amazon_drive.svg',
			'cutemi-link-source-box'             => './link-source/box.svg',
			'cutemi-link-source-clicknupload'    => './link-source/clicknupload.svg',
			'cutemi-link-source-dailyuploads'    => './link-source/dailyuploads.net.svg',
			'cutemi-link-source-ddownload'       => './link-source/ddownload.svg',
			'cutemi-link-source-dropapk'         => './link-source/dropapk.svg',
			'cutemi-link-source-dropbox'         => './link-source/dropbox.svg',
			'cutemi-link-source-fastdown'        => './link-source/down.fast-down.svg',
			'cutemi-link-source-fastclick'       => './link-source/fastclick.to.svg',
			'cutemi-link-source-filefactory'     => './link-source/filefactory.svg',
			'cutemi-link-source-gdrive'          => './link-source/gdrive.svg',
			'cutemi-link-source-hexupload'       => './link-source/hexupload.net.svg',
			'cutemi-link-source-jottacloud'      => './link-source/jottacloud.svg',
			'cutemi-link-source-katfile'         => './link-source/katfile.svg',
			'cutemi-link-source-mediafire'       => './link-source/mediafire.svg',
			'cutemi-link-source-mega'            => './link-source/mega.svg',
			'cutemi-link-source-mega-folder'     => './link-source/mega.svg',
			'cutemi-link-source-nitroflare'      => './link-source/nitroflare.svg',
			'cutemi-link-source-onedrive'        => './link-source/onedrive.svg',
			'cutemi-link-source-pcloud'          => './link-source/pcloud.svg',
			'cutemi-link-source-pcloud-e'        => './link-source/pcloud.svg',
			'cutemi-link-source-rapidgator'      => './link-source/rapidgator_2.svg',
			'cutemi-link-source-uploaded'        => './link-source/uploaded.svg',
			'cutemi-link-source-uploadgig'       => './link-source/uploadgig.svg',
			'cutemi-link-source-uptobox'         => './link-source/uptobox_2.svg',
			'cutemi-link-source-usersdrive'      => './link-source/usersdrive.svg',
			'cutemi-link-source-generic'         => './link-source/generic.svg',
		],
	];
}
