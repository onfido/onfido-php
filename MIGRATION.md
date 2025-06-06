# Migration Guide

This guide provides detailed instructions on how to upgrade between different
major versions of the client library.

It covers changes in core resources, other endpoints, and the OpenAPI generator,
ensuring a smooth transition between versions.

## Upgrading from 8.x to 9.x

### Core Resources

- Documents
  - Allow any string as `file_type`

### Other Endpoints

- Webhooks
  - Drop `WORKFLOW_SIGNED_EVIDENCE_FILE_CREATED` enum value from `WebhookEventType`
    enum
  - Make `href` property in `WebhookEventPayloadObject` optional
- Reports
  - Allow the deprecated `records` property in `WatchlistAml` and
    `WatchlistStandard` reports to be any object, and not just a string
  - Remove `documents` property (incl. `getDocuments()` accessors) from all
    reports except Document and Facial Similarity reports

### OpenAPI generator

- Version upgraded from `7.9.0` to `7.11.0`

## Upgrading from 7.x to 8.x

### Core Resources

- Applicants
  - Replace broken `ConsentsBuilder` object with a list of `ApplicantConsentBuilder`
    ones
- Workflow Runs
  - Rename `WorkflowRunSharedLink` object into `WorkflowRunLink`
  - Define `WorkflowRunStatus` enum for storing status information
  - Rename `WorkflowRunResponseError` object into `WorkflowRunError`
- Documents
  - Reuse already existent `DocumentTypes` enum when uploading documents

### Other Endpoints

- Webhooks
  - Define `WebhookEventObjectStatus` enum to collect webhook event object's status
  - Define `WebhookEventResourceType` enum to collect webhhok event resource's type
  - Define `WebhookEventPayloadResource` object to store webhook payload's contents
- Checks
  - Rename `Check::Status*` enum into `CheckStatus::*` for accessing checks status
- Reports
  - Remove properties from `DeviceIntelligenceBreakdownPropertiesDevice` object:
    `true_os`, `os_anomaly`, `rooted` and `remote_software`
  - Remove properties from `DeviceIntelligenceBreakdownPropertiesIp` object:
    `vpn_detection`, `proxy_detection` and `type`
  - Deprecate `records` object from `WatchlistStandardProperties` and
    `WatchlistAmlProperties` objects (includes `WatchlistPepsOnly` and
    `WatchlistSanctionsOnly` ones)

### OpenAPI generator

- Version upgraded from 7.6.0 to 7.9.0
