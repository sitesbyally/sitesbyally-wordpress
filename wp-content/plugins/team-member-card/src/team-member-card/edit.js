import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button, PanelRow } from '@wordpress/components';
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	const { profileImage, name, position } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Team Member Details', 'team-member-card')}>
					<PanelRow>
						<MediaUploadCheck>
							<MediaUpload
								onSelect={(media) => setAttributes({ profileImage: media.url })}
								allowedTypes={['image']}
								value={profileImage}
								render={({ open }) =>
									profileImage ? (
										<div>
											<img src={profileImage} alt="" />
											<Button onClick={open} variant='primary'>Replace Image</Button>
											<Button onClick={()=> setAttributes({profileImage: ''})} variant='tertiary' isDestructive>Remove</Button>
										</div>
									) : (
											<Button onClick={open} variant='primary'>Upload Profile Image</Button>
									)
								}
							/>
						</MediaUploadCheck>
					</PanelRow>
					<PanelRow>
						<TextControl
							label={__('Full Name', 'team-member-card')}
							value={name || ''}
							onChange={(value) =>
								setAttributes( {name: value})
							}
						/>
					</PanelRow>
					<PanelRow>
						<TextControl
							label={__('Position', 'team-member-card')}
							value={position || ''}
							onChange={(value) =>
								setAttributes( {position: value})
							}
							/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			
			<div {...useBlockProps()}>
				{profileImage && (
					<img className='team-member-card__image' src={profileImage} alt=""/>
				)}
				<h3 className='team-member-card__name'>{name || __('Name')}</h3>
				<p className='team-member-card__position'>{position || __('Position')}</p>
			</div>
		</>
	);
}
