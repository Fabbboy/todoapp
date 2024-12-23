
-----------------------------------------------------------------------
-- tasks
-----------------------------------------------------------------------

DROP TABLE IF EXISTS [tasks];

CREATE TABLE [tasks]
(
    [id] INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    [title] VARCHAR(255) NOT NULL,
    [description] MEDIUMTEXT,
    [is_completed] INTEGER DEFAULT 0,
    [created_at] TIMESTAMP DEFAULT (datetime(CURRENT_TIMESTAMP, 'localtime')),
    UNIQUE ([id])
);
