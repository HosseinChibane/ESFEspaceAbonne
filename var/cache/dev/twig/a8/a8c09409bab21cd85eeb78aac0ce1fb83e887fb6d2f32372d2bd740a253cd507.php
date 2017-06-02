<?php

/* ::base.html.twig */
class __TwigTemplate_611dedcd2614d62785879fbafc02bf8e2c8e9b441cd6b5f86643163ba09fae4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'Header' => array($this, 'block_Header'),
            'Navigation' => array($this, 'block_Navigation'),
            'Body' => array($this, 'block_Body'),
            'Footer' => array($this, 'block_Footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf5f8d8b3379dd1a510fdedfd134723933c485ea364889213aeaa300890f310d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5f8d8b3379dd1a510fdedfd134723933c485ea364889213aeaa300890f310d->enter($__internal_cf5f8d8b3379dd1a510fdedfd134723933c485ea364889213aeaa300890f310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_15579e5aeadb7108e5e47d3bba37fb0872f47323a1db01a46a16e7bf26d1e4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15579e5aeadb7108e5e47d3bba37fb0872f47323a1db01a46a16e7bf26d1e4ee->enter($__internal_15579e5aeadb7108e5e47d3bba37fb0872f47323a1db01a46a16e7bf26d1e4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>

 ";
        // line 8
        echo " ";
        $this->displayBlock('Head', $context, $blocks);
        // line 11
        echo "
</head>
<body>
  ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        $this->displayBlock('Header', $context, $blocks);
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $this->displayBlock('Navigation', $context, $blocks);
        // line 23
        echo "
    ";
        // line 25
        echo "    ";
        $this->displayBlock('Body', $context, $blocks);
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 32
        echo "  ";
        // line 33
        echo "</body>  
</html>
";
        
        $__internal_cf5f8d8b3379dd1a510fdedfd134723933c485ea364889213aeaa300890f310d->leave($__internal_cf5f8d8b3379dd1a510fdedfd134723933c485ea364889213aeaa300890f310d_prof);

        
        $__internal_15579e5aeadb7108e5e47d3bba37fb0872f47323a1db01a46a16e7bf26d1e4ee->leave($__internal_15579e5aeadb7108e5e47d3bba37fb0872f47323a1db01a46a16e7bf26d1e4ee_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_6a88e734689bd157c38bd204e997a7fe4d5739917c23d280d12f74abb2c73dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a88e734689bd157c38bd204e997a7fe4d5739917c23d280d12f74abb2c73dfc->enter($__internal_6a88e734689bd157c38bd204e997a7fe4d5739917c23d280d12f74abb2c73dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_780a7903e438d24250d30517485303d2a05e2f1d4b1d78fc7d3dca81efebc736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780a7903e438d24250d30517485303d2a05e2f1d4b1d78fc7d3dca81efebc736->enter($__internal_780a7903e438d24250d30517485303d2a05e2f1d4b1d78fc7d3dca81efebc736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_780a7903e438d24250d30517485303d2a05e2f1d4b1d78fc7d3dca81efebc736->leave($__internal_780a7903e438d24250d30517485303d2a05e2f1d4b1d78fc7d3dca81efebc736_prof);

        
        $__internal_6a88e734689bd157c38bd204e997a7fe4d5739917c23d280d12f74abb2c73dfc->leave($__internal_6a88e734689bd157c38bd204e997a7fe4d5739917c23d280d12f74abb2c73dfc_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_88b986106452b24662c41993add772da212c7518f3d23e99f1f47986da32a3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b986106452b24662c41993add772da212c7518f3d23e99f1f47986da32a3fc->enter($__internal_88b986106452b24662c41993add772da212c7518f3d23e99f1f47986da32a3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_2208818e2fa05c86213ef7461c788df7a44ec9404252ff14acca613ad5294c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2208818e2fa05c86213ef7461c788df7a44ec9404252ff14acca613ad5294c5c->enter($__internal_2208818e2fa05c86213ef7461c788df7a44ec9404252ff14acca613ad5294c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_2208818e2fa05c86213ef7461c788df7a44ec9404252ff14acca613ad5294c5c->leave($__internal_2208818e2fa05c86213ef7461c788df7a44ec9404252ff14acca613ad5294c5c_prof);

        
        $__internal_88b986106452b24662c41993add772da212c7518f3d23e99f1f47986da32a3fc->leave($__internal_88b986106452b24662c41993add772da212c7518f3d23e99f1f47986da32a3fc_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_298d6f97af879a14686a7b1c26319c17f43febcd7a60cc8fd8b89f307393740f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298d6f97af879a14686a7b1c26319c17f43febcd7a60cc8fd8b89f307393740f->enter($__internal_298d6f97af879a14686a7b1c26319c17f43febcd7a60cc8fd8b89f307393740f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_3714fbc6c8a4d650da6760b75e831f922f5be32ba15fce7daad1152c5e11aa7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3714fbc6c8a4d650da6760b75e831f922f5be32ba15fce7daad1152c5e11aa7b->enter($__internal_3714fbc6c8a4d650da6760b75e831f922f5be32ba15fce7daad1152c5e11aa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_3714fbc6c8a4d650da6760b75e831f922f5be32ba15fce7daad1152c5e11aa7b->leave($__internal_3714fbc6c8a4d650da6760b75e831f922f5be32ba15fce7daad1152c5e11aa7b_prof);

        
        $__internal_298d6f97af879a14686a7b1c26319c17f43febcd7a60cc8fd8b89f307393740f->leave($__internal_298d6f97af879a14686a7b1c26319c17f43febcd7a60cc8fd8b89f307393740f_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_b494e854fff664f71064a2fa930a9a2a7a2350e943ca1839830187edae771671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b494e854fff664f71064a2fa930a9a2a7a2350e943ca1839830187edae771671->enter($__internal_b494e854fff664f71064a2fa930a9a2a7a2350e943ca1839830187edae771671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_dc5b27715de23920c620184ec22eecc8421c954cd9d0cccef4450e370aa04163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5b27715de23920c620184ec22eecc8421c954cd9d0cccef4450e370aa04163->enter($__internal_dc5b27715de23920c620184ec22eecc8421c954cd9d0cccef4450e370aa04163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_dc5b27715de23920c620184ec22eecc8421c954cd9d0cccef4450e370aa04163->leave($__internal_dc5b27715de23920c620184ec22eecc8421c954cd9d0cccef4450e370aa04163_prof);

        
        $__internal_b494e854fff664f71064a2fa930a9a2a7a2350e943ca1839830187edae771671->leave($__internal_b494e854fff664f71064a2fa930a9a2a7a2350e943ca1839830187edae771671_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_bca54cb5792a0514ff3794174b87d8e80e1cdd3f293d5f0b32d74d2a6a0bb697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca54cb5792a0514ff3794174b87d8e80e1cdd3f293d5f0b32d74d2a6a0bb697->enter($__internal_bca54cb5792a0514ff3794174b87d8e80e1cdd3f293d5f0b32d74d2a6a0bb697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_df54ed7cb3dbd135697dcc32003192e4441dc82330d5e00fb9825bf6bbd5d314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df54ed7cb3dbd135697dcc32003192e4441dc82330d5e00fb9825bf6bbd5d314->enter($__internal_df54ed7cb3dbd135697dcc32003192e4441dc82330d5e00fb9825bf6bbd5d314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_df54ed7cb3dbd135697dcc32003192e4441dc82330d5e00fb9825bf6bbd5d314->leave($__internal_df54ed7cb3dbd135697dcc32003192e4441dc82330d5e00fb9825bf6bbd5d314_prof);

        
        $__internal_bca54cb5792a0514ff3794174b87d8e80e1cdd3f293d5f0b32d74d2a6a0bb697->leave($__internal_bca54cb5792a0514ff3794174b87d8e80e1cdd3f293d5f0b32d74d2a6a0bb697_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 30,  166 => 29,  147 => 25,  135 => 21,  124 => 20,  105 => 16,  95 => 10,  93 => 9,  82 => 8,  70 => 33,  68 => 32,  65 => 29,  62 => 27,  59 => 25,  56 => 23,  53 => 20,  50 => 18,  47 => 16,  45 => 15,  40 => 11,  37 => 8,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layoutdudeego.html.twig #}

<!DOCTYPE html>
<html>
<head>

 {# Contenu de la balise head #}
 {% block Head %} 
   {% include ':backend:head.html.twig' %}
 {% endblock %}

</head>
<body>
  {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
    {# Contenu de l'en-tete #}
    {% block Header %} 
    {% endblock %}

    {# Contenu de la balise nav #}
    {% block Navigation %} 
      {% include ':backend:navigation.html.twig' %}   
    {% endblock %}

    {# Contenu du corps de page #}
    {% block Body %} 
    {% endblock %}

    {# Contenu du pied de page #}
    {% block Footer %} 
      {% include ':backend:footer.html.twig' %} 
    {% endblock %}
  {#{% endif %}#}
</body>  
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources\\views/base.html.twig");
    }
}
