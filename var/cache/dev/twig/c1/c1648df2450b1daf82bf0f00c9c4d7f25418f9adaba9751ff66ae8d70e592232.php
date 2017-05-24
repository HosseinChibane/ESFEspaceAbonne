<?php

/* ::base.html.twig */
class __TwigTemplate_904a1188b25514e7ba5dd290105aa6e239bf111e6adf01072a90bac275636348 extends Twig_Template
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
        $__internal_d4be272f3fea52a28d9e4b20507819093ef0ceff6a0f78a7685912edcadef6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4be272f3fea52a28d9e4b20507819093ef0ceff6a0f78a7685912edcadef6fe->enter($__internal_d4be272f3fea52a28d9e4b20507819093ef0ceff6a0f78a7685912edcadef6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d15920feb359124056e2d990942b2c6102c5939725a1f64b1f16ec27cbf750dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15920feb359124056e2d990942b2c6102c5939725a1f64b1f16ec27cbf750dd->enter($__internal_d15920feb359124056e2d990942b2c6102c5939725a1f64b1f16ec27cbf750dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d4be272f3fea52a28d9e4b20507819093ef0ceff6a0f78a7685912edcadef6fe->leave($__internal_d4be272f3fea52a28d9e4b20507819093ef0ceff6a0f78a7685912edcadef6fe_prof);

        
        $__internal_d15920feb359124056e2d990942b2c6102c5939725a1f64b1f16ec27cbf750dd->leave($__internal_d15920feb359124056e2d990942b2c6102c5939725a1f64b1f16ec27cbf750dd_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_ba9c81794df46631ea8b35ef6173d969136ef7553d0096d204fd074f3dbf1f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9c81794df46631ea8b35ef6173d969136ef7553d0096d204fd074f3dbf1f9b->enter($__internal_ba9c81794df46631ea8b35ef6173d969136ef7553d0096d204fd074f3dbf1f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_54c206d6230ba747d871a55878e0e2804852bcb018f5935216280c7b2d1804b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c206d6230ba747d871a55878e0e2804852bcb018f5935216280c7b2d1804b2->enter($__internal_54c206d6230ba747d871a55878e0e2804852bcb018f5935216280c7b2d1804b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_54c206d6230ba747d871a55878e0e2804852bcb018f5935216280c7b2d1804b2->leave($__internal_54c206d6230ba747d871a55878e0e2804852bcb018f5935216280c7b2d1804b2_prof);

        
        $__internal_ba9c81794df46631ea8b35ef6173d969136ef7553d0096d204fd074f3dbf1f9b->leave($__internal_ba9c81794df46631ea8b35ef6173d969136ef7553d0096d204fd074f3dbf1f9b_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_65ca3dcdbb878d7014836727902f7c9063d762159d68075ecedd8100366af740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ca3dcdbb878d7014836727902f7c9063d762159d68075ecedd8100366af740->enter($__internal_65ca3dcdbb878d7014836727902f7c9063d762159d68075ecedd8100366af740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_eaa8bbe08b8733ea01c2dadd6b1aaeb7bc219cce0516a482026a100c7a8e51a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa8bbe08b8733ea01c2dadd6b1aaeb7bc219cce0516a482026a100c7a8e51a9->enter($__internal_eaa8bbe08b8733ea01c2dadd6b1aaeb7bc219cce0516a482026a100c7a8e51a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_eaa8bbe08b8733ea01c2dadd6b1aaeb7bc219cce0516a482026a100c7a8e51a9->leave($__internal_eaa8bbe08b8733ea01c2dadd6b1aaeb7bc219cce0516a482026a100c7a8e51a9_prof);

        
        $__internal_65ca3dcdbb878d7014836727902f7c9063d762159d68075ecedd8100366af740->leave($__internal_65ca3dcdbb878d7014836727902f7c9063d762159d68075ecedd8100366af740_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_b05b86d6e12dd1a9f0bbf558f9cc214df83169e6480b666873c3f5ef7485452a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05b86d6e12dd1a9f0bbf558f9cc214df83169e6480b666873c3f5ef7485452a->enter($__internal_b05b86d6e12dd1a9f0bbf558f9cc214df83169e6480b666873c3f5ef7485452a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_8a4fa33a490d30125135c69a9a5816840c119236f87a929168a341d80fcf6be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4fa33a490d30125135c69a9a5816840c119236f87a929168a341d80fcf6be9->enter($__internal_8a4fa33a490d30125135c69a9a5816840c119236f87a929168a341d80fcf6be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_8a4fa33a490d30125135c69a9a5816840c119236f87a929168a341d80fcf6be9->leave($__internal_8a4fa33a490d30125135c69a9a5816840c119236f87a929168a341d80fcf6be9_prof);

        
        $__internal_b05b86d6e12dd1a9f0bbf558f9cc214df83169e6480b666873c3f5ef7485452a->leave($__internal_b05b86d6e12dd1a9f0bbf558f9cc214df83169e6480b666873c3f5ef7485452a_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_7ee109a503834244e8786be598e02591ec99051d0e7906104ef3d30bb1f00e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee109a503834244e8786be598e02591ec99051d0e7906104ef3d30bb1f00e5a->enter($__internal_7ee109a503834244e8786be598e02591ec99051d0e7906104ef3d30bb1f00e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_9d03aad4a33c7bf4736e5f32ddd12d00b271d67d4def8031ecfba159b94962c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d03aad4a33c7bf4736e5f32ddd12d00b271d67d4def8031ecfba159b94962c3->enter($__internal_9d03aad4a33c7bf4736e5f32ddd12d00b271d67d4def8031ecfba159b94962c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_9d03aad4a33c7bf4736e5f32ddd12d00b271d67d4def8031ecfba159b94962c3->leave($__internal_9d03aad4a33c7bf4736e5f32ddd12d00b271d67d4def8031ecfba159b94962c3_prof);

        
        $__internal_7ee109a503834244e8786be598e02591ec99051d0e7906104ef3d30bb1f00e5a->leave($__internal_7ee109a503834244e8786be598e02591ec99051d0e7906104ef3d30bb1f00e5a_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_0c911f2e2ae222e9ec0b27aad91143484ddc2ef065487301ad3c6c0771c818ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c911f2e2ae222e9ec0b27aad91143484ddc2ef065487301ad3c6c0771c818ec->enter($__internal_0c911f2e2ae222e9ec0b27aad91143484ddc2ef065487301ad3c6c0771c818ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_1531b8e367360942e9b4f84ef767938c27770ba4760efc15b5c4caaa795c5a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1531b8e367360942e9b4f84ef767938c27770ba4760efc15b5c4caaa795c5a33->enter($__internal_1531b8e367360942e9b4f84ef767938c27770ba4760efc15b5c4caaa795c5a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_1531b8e367360942e9b4f84ef767938c27770ba4760efc15b5c4caaa795c5a33->leave($__internal_1531b8e367360942e9b4f84ef767938c27770ba4760efc15b5c4caaa795c5a33_prof);

        
        $__internal_0c911f2e2ae222e9ec0b27aad91143484ddc2ef065487301ad3c6c0771c818ec->leave($__internal_0c911f2e2ae222e9ec0b27aad91143484ddc2ef065487301ad3c6c0771c818ec_prof);

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
