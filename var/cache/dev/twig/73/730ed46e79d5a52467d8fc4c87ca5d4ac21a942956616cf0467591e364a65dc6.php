<?php

/* ::base.html.twig */
class __TwigTemplate_067a276229e98f23a9b6ccd7d27671969fcfa7034f7ad9cfbe9d678ca79b18e7 extends Twig_Template
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
        $__internal_b2be7518522fa261fc70873e689bce1c37179b5a60d9b2febadb741639cf04bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2be7518522fa261fc70873e689bce1c37179b5a60d9b2febadb741639cf04bc->enter($__internal_b2be7518522fa261fc70873e689bce1c37179b5a60d9b2febadb741639cf04bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_62cff0cf10371439df849e60d746cc6730bbebc4b533b367cfea1149ad8e3e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cff0cf10371439df849e60d746cc6730bbebc4b533b367cfea1149ad8e3e89->enter($__internal_62cff0cf10371439df849e60d746cc6730bbebc4b533b367cfea1149ad8e3e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b2be7518522fa261fc70873e689bce1c37179b5a60d9b2febadb741639cf04bc->leave($__internal_b2be7518522fa261fc70873e689bce1c37179b5a60d9b2febadb741639cf04bc_prof);

        
        $__internal_62cff0cf10371439df849e60d746cc6730bbebc4b533b367cfea1149ad8e3e89->leave($__internal_62cff0cf10371439df849e60d746cc6730bbebc4b533b367cfea1149ad8e3e89_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_96b82516b01f19bf20a23b0794048afd2de94e3d24306cf430a11d3844e1d2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b82516b01f19bf20a23b0794048afd2de94e3d24306cf430a11d3844e1d2cf->enter($__internal_96b82516b01f19bf20a23b0794048afd2de94e3d24306cf430a11d3844e1d2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_41e2a14803b2ea06a1c9b61cff2fa7a14bcb09fa5c9c2a8b2038937ab54a329e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e2a14803b2ea06a1c9b61cff2fa7a14bcb09fa5c9c2a8b2038937ab54a329e->enter($__internal_41e2a14803b2ea06a1c9b61cff2fa7a14bcb09fa5c9c2a8b2038937ab54a329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_41e2a14803b2ea06a1c9b61cff2fa7a14bcb09fa5c9c2a8b2038937ab54a329e->leave($__internal_41e2a14803b2ea06a1c9b61cff2fa7a14bcb09fa5c9c2a8b2038937ab54a329e_prof);

        
        $__internal_96b82516b01f19bf20a23b0794048afd2de94e3d24306cf430a11d3844e1d2cf->leave($__internal_96b82516b01f19bf20a23b0794048afd2de94e3d24306cf430a11d3844e1d2cf_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_c20bffd4314558fbff39cd8a0829b00641e3d5d3d5813edd8c6fe534178c9f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20bffd4314558fbff39cd8a0829b00641e3d5d3d5813edd8c6fe534178c9f4e->enter($__internal_c20bffd4314558fbff39cd8a0829b00641e3d5d3d5813edd8c6fe534178c9f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_3481c8a912b87aa1a265d61c74a3bab7777d689af8a276ec49776076cc1fc31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3481c8a912b87aa1a265d61c74a3bab7777d689af8a276ec49776076cc1fc31b->enter($__internal_3481c8a912b87aa1a265d61c74a3bab7777d689af8a276ec49776076cc1fc31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_3481c8a912b87aa1a265d61c74a3bab7777d689af8a276ec49776076cc1fc31b->leave($__internal_3481c8a912b87aa1a265d61c74a3bab7777d689af8a276ec49776076cc1fc31b_prof);

        
        $__internal_c20bffd4314558fbff39cd8a0829b00641e3d5d3d5813edd8c6fe534178c9f4e->leave($__internal_c20bffd4314558fbff39cd8a0829b00641e3d5d3d5813edd8c6fe534178c9f4e_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_2ef3d6decc35562c1227564f7ae131e4c83e46089915b40466ee8b370e94a1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef3d6decc35562c1227564f7ae131e4c83e46089915b40466ee8b370e94a1e6->enter($__internal_2ef3d6decc35562c1227564f7ae131e4c83e46089915b40466ee8b370e94a1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_55a1b8ae6e8bf0bc45ec2798a84797360a1f1d57b8325869b3be2b2160e05d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a1b8ae6e8bf0bc45ec2798a84797360a1f1d57b8325869b3be2b2160e05d98->enter($__internal_55a1b8ae6e8bf0bc45ec2798a84797360a1f1d57b8325869b3be2b2160e05d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_55a1b8ae6e8bf0bc45ec2798a84797360a1f1d57b8325869b3be2b2160e05d98->leave($__internal_55a1b8ae6e8bf0bc45ec2798a84797360a1f1d57b8325869b3be2b2160e05d98_prof);

        
        $__internal_2ef3d6decc35562c1227564f7ae131e4c83e46089915b40466ee8b370e94a1e6->leave($__internal_2ef3d6decc35562c1227564f7ae131e4c83e46089915b40466ee8b370e94a1e6_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_80ae0c46e95e9575292cca3e32e4285f0af3979df261bc844219b6538b8c7d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ae0c46e95e9575292cca3e32e4285f0af3979df261bc844219b6538b8c7d68->enter($__internal_80ae0c46e95e9575292cca3e32e4285f0af3979df261bc844219b6538b8c7d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_86057b4e49403e5e526b702d66b825ce48092d44d5c82b3fb2cbf1291049f6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86057b4e49403e5e526b702d66b825ce48092d44d5c82b3fb2cbf1291049f6ec->enter($__internal_86057b4e49403e5e526b702d66b825ce48092d44d5c82b3fb2cbf1291049f6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_86057b4e49403e5e526b702d66b825ce48092d44d5c82b3fb2cbf1291049f6ec->leave($__internal_86057b4e49403e5e526b702d66b825ce48092d44d5c82b3fb2cbf1291049f6ec_prof);

        
        $__internal_80ae0c46e95e9575292cca3e32e4285f0af3979df261bc844219b6538b8c7d68->leave($__internal_80ae0c46e95e9575292cca3e32e4285f0af3979df261bc844219b6538b8c7d68_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_89eba9f10a022968f33c543dbaca23818a44fa03868cdb3118f9eb9a5d621f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89eba9f10a022968f33c543dbaca23818a44fa03868cdb3118f9eb9a5d621f91->enter($__internal_89eba9f10a022968f33c543dbaca23818a44fa03868cdb3118f9eb9a5d621f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_f015d15855f7747a4da28ed243f033c124b8dc94fa9b3755b21119509b43ce96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f015d15855f7747a4da28ed243f033c124b8dc94fa9b3755b21119509b43ce96->enter($__internal_f015d15855f7747a4da28ed243f033c124b8dc94fa9b3755b21119509b43ce96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_f015d15855f7747a4da28ed243f033c124b8dc94fa9b3755b21119509b43ce96->leave($__internal_f015d15855f7747a4da28ed243f033c124b8dc94fa9b3755b21119509b43ce96_prof);

        
        $__internal_89eba9f10a022968f33c543dbaca23818a44fa03868cdb3118f9eb9a5d621f91->leave($__internal_89eba9f10a022968f33c543dbaca23818a44fa03868cdb3118f9eb9a5d621f91_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\views\\base.html.twig");
    }
}
