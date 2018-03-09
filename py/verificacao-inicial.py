import os
import subprocess
import platform

print("Composer:")
subprocess.run("composer --version", shell=True, check=True)
print()
print("GIT:")
subprocess.run("git --version", shell=True, check=True)
print()
print("PHP:")
subprocess.run("php -v", shell=True, check=True)
print()
print("MySQL:")
subprocess.run("mysql -V", shell=True, check=True)

so = platform.system()
print(so)