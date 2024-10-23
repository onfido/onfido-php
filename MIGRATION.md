# Migration Guide

## Upgrading from 7.x to 8.x

### Core Resources

- Applicants
  - Replace broken `ConsentsBuilder` object with a list of `ApplicantConsentBuilder` ones
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
  - Remove properties from `DeviceIntelligenceBreakdownPropertiesDevice` object: `true_os`, `os_anomaly`, `rooted` and `remote_software`
  - Remove properties from `DeviceIntelligenceBreakdownPropertiesIp` object: `vpn_detection`, `proxy_detection` and `type`
  - Deprecate `records` object from `WatchlistStandardProperties` and `WatchlistAmlProperties` objects (includes `WatchlistPepsOnly` and `WatchlistSanctionsOnly` ones)

### OpenAPI generator

- Version upgraded from 7.6.0 to 7.9.0
