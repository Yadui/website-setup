import re

# Path to your original SQL dump
input_file = "local-23April2025.sql"
# Path for the cleaned output
output_file = "local-23April2025_fixed.sql"

# Read the SQL file
with open(input_file, "r", encoding="utf-8", errors="ignore") as f:
    sql_content = f.read()

# Find all identifiers inside backticks that are too long
pattern = r"`([a-zA-Z0-9_]{65,})`"
matches = re.findall(pattern, sql_content)

# Keep track of renames to be consistent
rename_map = {}
counter = 1

for name in matches:
    if name not in rename_map:
        short_name = f"shortname_{counter}"
        rename_map[name] = short_name
        counter += 1

# Replace all occurrences
for old, new in rename_map.items():
    sql_content = sql_content.replace(f"`{old}`", f"`{new}`")

# Save the fixed SQL
with open(output_file, "w", encoding="utf-8") as f:
    f.write(sql_content)

print(f"✅ Fixed SQL saved as {output_file}")
print(f"Renamed {len(rename_map)} identifiers.")