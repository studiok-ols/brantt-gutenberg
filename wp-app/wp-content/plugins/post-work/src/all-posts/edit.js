import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, RadioControl } from "@wordpress/components";
import { useEntityRecords } from '@wordpress/core-data';

import './editor.scss';

export default function Edit( {attributes, setAttributes} ) {

	const { records, isResolving } = useEntityRecords('postType', 'post', {
		per_page: -1,
		orderby: 'title',
		order: attributes.order,
		_embed: true,
	});

	function PostItemImage({record}) {
		return record.featured_media && ( <img src={record._embedded['wp:featuredmedia'][0].source_url} alt={record.title.rendered} /> )
	}

	return (
	<div {...useBlockProps()}>
		<ul>
			<InspectorControls>
				<PanelBody
					title="Order"
					icon="admin-appearance"
					initialOpen
				>
					<RadioControl
						label="User type"
						help="The type of the current user"
						selected={attributes.order}
						options={[
							{label: 'Asc', value: 'asc'},
							{label: 'Desc', value: 'desc'},
						]}
						onChange={(order) => setAttributes({order})}
					/>
				</PanelBody>
			</InspectorControls>
			{records && (
				<>
					{records.map((record, index) => (
						<li key={record.id}>
							<a href="{record.link}" className="post-work-link">
								<div className="post-work-image-wrapper">
									<PostItemImage record={record}/>
								</div>
								<div className="post-work-text-wrapper">
									{index === 0 && <span className="featured-post">Featured post</span>}
									<h2 className="title">{record.title.rendered}</h2>
									<div dangerouslySetInnerHTML={{__html: record.content.rendered}}/>
									<span className="post-read-more">{__('Read More')}</span>
								</div>
							</a>
						</li>
					))}
				</>
			)}

		</ul>
	</div>
	);

}
