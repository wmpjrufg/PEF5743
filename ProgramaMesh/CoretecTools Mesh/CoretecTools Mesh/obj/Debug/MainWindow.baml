   M S B A M L   `   `   `  ����L  HCoretecTools Mesh, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null5clr-namespace:CoretecTools_MeshCoretecTools_Mesh  5   	   "    CoretecTools_Mesh.MainWindow   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   1localclr-namespace:CoretecTools_Mesh     5   	   b ^MaterialDesignThemes.Wpf, Version=3.2.0.1979, Culture=neutral, PublicKeyToken=df2a72020bd7962aFmaterialDesign1http://materialdesigninxaml.net/winfx/xaml/themes  5
        � Title$  CoretecTools Delaunay ��5   	   $	��850��6(   $
��1200��65      MaterialDesignBody#���   5   	   $��Regular"�5   	   $��13(�5   	   &   System.Windows.Media.TextOptions   TextFormattingMode$ Ideal=�5   	      TextRenderingMode$
 Auto=�5   	     MaterialDesignPaper#���  5   	     MaterialDesignFont#���  5   	   $	��150��5   	   $	��200��5   	    � WindowState$ 	Maximized=�5   	    � WindowStartupLocation$ CenterScreen=�5   	    � Icon$ 231@72x.png��5   	   .��5      � .+�5   
   #  MaterialDesignThemes.Wpf.Card  $��10q�6   .��5      �  � ColumnDefinitions 5      �� 5      $��1* �6'   �� 5      $	��15* �6'   �� 5      $��1* �6'    � 	Resources 5      '  !MaterialDesignThemes.Wpf.PackIcon �� 
TargetType	 �� Property
 �� Value��%v   '        �� 5       "  6   .�5!      �� 	 � ��$
 30��62   �� 5"      	 � ��$
 30��63   5#      5$      .+�5%      � $��0��6   .+�5&      �� $��Center=�6   $
��0,15q�6<   .@�5'      �� $��Center=�6'   $
��0,10q�6D   .��5(      ��  & "MaterialDesignFloatingActionButton#��[ 6%   $
��Left=�6a   
���   ���5)   %   Z� ��6<   Z� .��5*   "   �� $��-5q�6-   .+�5+   &        Kind$ Resistor=�6>   5,   #   5-      5.      �� 5/      $��Center=�6'   $��0q�6D   .��50      �� #��[ 6%   $
��Left=�6a   
���   ���51   %   Z� ��6<   Z� .��52   "   �� $��-5q�6-   .+�53   &     $ CircleSlice6=�6>   54   #   55      56      �� 57      $��Center=�6'   $
��0,10q�6D   .��58      �� #��[ 6%   $
��Left=�6a   
���   ���59   %   Z� ��6<   Z� .��5:   "   �� $��-5q�6-   .+�5;   &     $ Resistor=�6>   5<   #   5=      5>      �� 5?      $��Center=�6'   $��0q�6D   .��5@      �� #��[ 6%   $
��Left=�6a   
���   ���5A   %   Z� ��6<   Z� .��5B   "   �� $��-5q�6-   .+�5C   &     $ Resistor=�6>   5D   #   5E      5F      5G      5H      � 5I      $��1��6   5K      � 5L      $��2��6   5N      5O      5P      5Q      5R      